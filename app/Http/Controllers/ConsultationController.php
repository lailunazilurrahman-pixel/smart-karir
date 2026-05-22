<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Consultation;
use App\Models\ConsultationMessage;
use Illuminate\Support\Facades\Auth;

class ConsultationController extends Controller
{
    // User kirim konsultasi
    public function store(Request $request)
    {
        $consultation = Consultation::create([

            'user_id' => Auth::id(),

            'message' => $request->message,

            'status' => 'Menunggu',

        ]);

        // Simpan pesan pertama ke chat
        ConsultationMessage::create([

            'consultation_id' => $consultation->id,

            'user_id' => Auth::id(),

            'message' => $request->message,

        ]);

        return redirect(
            '/consultation-chat/' . $consultation->id
        );
    }

    // Konselor melihat konsultasi
    public function index()
    {
        $consultations = Consultation::latest()->get();

        return view(
            'konselor.konsultasi',
            compact('consultations')
        );
    }

    // Konselor membalas konsultasi lama
    public function reply(Request $request, int $id)
    {
        $consultation = Consultation::findOrFail($id);

        $consultation->update([

            'reply' => $request->reply,

            'status' => 'Dibalas',

        ]);

        return redirect()->back()->with(
            'success',
            'Balasan berhasil dikirim'
        );
    }

    // Room chat konsultasi
    public function chat(int $id)
    {
        $consultation = Consultation::with(
            'messages.user'
        )->findOrFail($id);

        /** @var User $user */
        $user = auth()->user();

        // Jika user biasa
        if ($user->role == 'user') {

            // User hanya boleh buka chat miliknya
            if ($consultation->user_id != auth()->id()) {

                abort(403);

            }

        }

        // Konselor & admin boleh akses
        return view(
            'consultation.chat',
            compact('consultation')
        );
    }

    // Kirim pesan chat
    public function sendMessage(Request $request, int $id)
    {
        $consultation = Consultation::findOrFail($id);

        /** @var User $user */
        $user = auth()->user();

        // Jika user biasa
        if ($user->role == 'user') {

            // User hanya boleh akses room miliknya
            if ($consultation->user_id != auth()->id()) {

                abort(403);

            }

        }

        // Jika konsultasi selesai
        if ($consultation->status == 'Selesai') {

            return redirect()->back()->with(
                'success',
                'Konsultasi sudah selesai'
            );

        }

        ConsultationMessage::create([

            'consultation_id' => $id,

            'user_id' => auth()->id(),

            'message' => $request->message,

        ]);

        // Update status
        $consultation->update([

            'status' => 'Dibalas',

        ]);

        return redirect()->back();
    }

    // Selesaikan konsultasi
    public function finish(int $id)
    {
        $consultation = Consultation::findOrFail($id);

        /** @var User $user */
        $user = auth()->user();

        // Jika user biasa
        if ($user->role == 'user') {

            // User hanya boleh akses room miliknya
            if ($consultation->user_id != auth()->id()) {

                abort(403);

            }

        }

        $consultation->update([

            'status' => 'Selesai',

        ]);

        return redirect()->back()->with(
            'success',
            'Konsultasi telah diselesaikan'
        );
    }
}