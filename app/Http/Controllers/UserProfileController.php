<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use App\Models\Interest;
use App\Models\Skill;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function create()
    {
        $interests = Interest::all();

        $skills = Skill::all();

        return view('user.profile', compact('interests', 'skills'));
    }

    public function store(Request $request)
    {
        UserProfile::create([

            'user_id' => Auth::id(),

            'interest' => $request->interest,

            // Simpan skill manual user
            'skill' => $request->skill,

        ]);

        return redirect('/recommendation');
    }

    public function recommendation()
    {
        $profile = UserProfile::where('user_id', Auth::id())
            ->latest()
            ->first();

        // Ambil skill user
        $skillInput = strtolower($profile->skill);

        // Pecah skill jika banyak
        $skills = explode(',', $skillInput);

        // Mapping typo & bahasa masyarakat
        $mapping = [

            'public spaking' => 'public speaking',
            'ngomong depan umum' => 'public speaking',

            'jualan' => 'jualan',
            'dagang' => 'jualan',

            'coding' => 'ngoding',
            'ngoding' => 'ngoding',

            'ui ux' => 'uiux',
            'ui/ux' => 'uiux',
            'uiux' => 'uiux',

            'desain ui' => 'desain',

            'nyanyi' => 'bernyanyi',
            'menyanyi' => 'bernyanyi',
            'vokal' => 'bernyanyi',

        ];

        // Normalisasi skill
        foreach ($skills as &$skill) {

            $skill = trim(strtolower($skill));

            if (array_key_exists($skill, $mapping)) {

                $skill = $mapping[$skill];
            }
        }

        // SMART WEIGHTED MATCHING
        $matchedCareers = [];

        foreach (Career::all() as $career) {

            $careerSkills = explode(',', strtolower($career->skill));

            $careerSkills = array_map('trim', $careerSkills);

            $userSkills = array_map(function ($skill) {

                return trim(strtolower($skill));

            }, $skills);

            $matchCount = 0;

            // Hitung skill yang cocok
            foreach ($careerSkills as $careerSkill) {

                if (in_array($careerSkill, $userSkills)) {

                    $matchCount++;
                }
            }

            // Jika ada skill cocok
            if ($matchCount > 0) {

                // Persentase kecocokan
                $career->match_percent =
                    ($matchCount / count($careerSkills)) * 100;

                $matchedCareers[] = $career;
            }
        }

        // Ranking berdasarkan kecocokan
        usort($matchedCareers, function ($a, $b) {

            // Prioritas kecocokan skill
            if ($a->match_percent == $b->match_percent) {

                return $b->score <=> $a->score;
            }

            return $b->match_percent <=> $a->match_percent;
        });

        // Ambil semua career yang cocok
        $careers = collect($matchedCareers);

        // FILTER minimal kecocokan 50%
        $careers = $careers->filter(function ($career) {

            return $career->match_percent >= 50;

        });

        // Jika kosong gunakan minat
        if ($careers->count() == 0) {

            $careers = Career::whereRaw(
                'LOWER(category) LIKE ?',
                ['%' . strtolower($profile->interest) . '%']
            )
            ->orderByDesc('score')
            ->get();
        }

        // Jika masih kosong
        if ($careers->count() == 0) {

            return view(
                'user.recommendation',
                [
                    'careers' => collect(),
                    'profile' => $profile,
                    'error' => 'Tidak ditemukan karir yang cocok dengan minat dan kemampuan kamu.'
                ]
            );
        }

        // Limit top recommendation
        $careers = $careers->take(10);

        return view(
            'user.recommendation',
            compact('careers', 'profile')
        );
    }
}