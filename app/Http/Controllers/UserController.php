<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    // Tampilkan semua user
    public function index()
    {
        $users = User::all();

        return view(
            'admin.users',
            compact('users')
        );
    }

    // Hapus user
    public function destroy(int $id)
    {
        $user = User::findOrFail($id);

        // Admin tidak bisa hapus akun sendiri
        if ($user->id == auth()->id()) {

            return redirect()->back()->with(
                'error',
                'Admin tidak bisa menghapus akun sendiri'
            );

        }

        $user->delete();

        return redirect()->back()->with(
            'success',
            'User berhasil dihapus'
        );
    }
}