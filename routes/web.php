<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {

    if (Auth::user()->role == 'admin') {
        return redirect('/admin');
    }

    if (Auth::user()->role == 'konselor') {
        return redirect('/konselor');
    }

    return redirect('/user');

})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';


// ================= ADMIN =================
Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/admin', function () {

        $totalUser = \App\Models\User::where('role', 'user')->count();

        $totalKarir = \App\Models\Career::count();

        $totalMinat = \App\Models\Interest::count();

        $totalSkill = \App\Models\Skill::count();

        return view('admin.dashboard', compact(
            'totalUser',
            'totalKarir',
            'totalMinat',
            'totalSkill'
        ));

    });

    // Data user
    Route::get(
        '/data-user',
        [App\Http\Controllers\UserController::class, 'index']
    );

    // Hapus user
    Route::delete(
        '/delete-user/{id}',
        [App\Http\Controllers\UserController::class, 'destroy']
    );

    Route::resource(
        'careers',
        App\Http\Controllers\CareerController::class
    );

    Route::resource(
        'interests',
        App\Http\Controllers\InterestController::class
    );

    Route::resource(
        'skills',
        App\Http\Controllers\SkillController::class
    );

});


// ================= KONSELOR =================
Route::middleware(['auth', 'role:konselor'])->group(function () {

    Route::get('/konselor', function () {

        $consultations = \App\Models\Consultation::latest()
            ->take(5)
            ->get();

        // Total konsultasi baru
        $totalBaru = \App\Models\Consultation::where(
            'status',
            'Menunggu'
        )->count();

        return view(
            'konselor.dashboard',
            compact(
                'consultations',
                'totalBaru'
            )
        );

    });

    // Konsultasi masuk
    Route::get(
        '/konsultasi-masuk',
        [App\Http\Controllers\ConsultationController::class, 'index']
    );

    // Balas konsultasi
    Route::post(
        '/konsultasi-reply/{id}',
        [App\Http\Controllers\ConsultationController::class, 'reply']
    );

});


// ================= USER =================
Route::middleware(['auth', 'role:user'])->group(function () {

    Route::get('/user', function () {

        return view('user.dashboard');

    });

    Route::get(
        '/profile-user',
        [App\Http\Controllers\UserProfileController::class, 'create']
    );

    Route::post(
        '/profile-user',
        [App\Http\Controllers\UserProfileController::class, 'store']
    );

    Route::get(
        '/recommendation',
        [App\Http\Controllers\UserProfileController::class, 'recommendation']
    );

    // Konsultasi user
    Route::get('/konsultasi', function () {

        return view('user.konsultasi');

    });

    Route::post(
        '/konsultasi',
        [App\Http\Controllers\ConsultationController::class, 'store']
    );

});


// ================= CHAT KONSULTASI =================
Route::middleware('auth')->group(function () {

    // Room chat
    Route::get(
        '/consultation-chat/{id}',
        [App\Http\Controllers\ConsultationController::class, 'chat']
    );

    // Kirim pesan
    Route::post(
        '/consultation-chat/{id}',
        [App\Http\Controllers\ConsultationController::class, 'sendMessage']
    );

    // Selesaikan konsultasi
    Route::post(
        '/consultation-finish/{id}',
        [App\Http\Controllers\ConsultationController::class, 'finish']
    );

});


// ================= LOGOUT =================
Route::get('/keluar', function (\Illuminate\Http\Request $request) {

    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/login');

});