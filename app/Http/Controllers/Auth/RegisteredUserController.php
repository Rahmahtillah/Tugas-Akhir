<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\mahasiswa;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'nim' =>['required', 'string', 'max:15'],
            'prodi_id' =>['required', 'string', 'max:255'],
            'jurusan_id' =>['required', 'string', 'max:255'],
            'nohp' =>['required', 'string', 'max:255'],
            'alamat' =>['required', 'string', 'max:255'],
            'jeniskelamin' =>['required', 'string', 'max:255'],
            'tgllahir' =>['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'email' => $request->email,
            'isAdmin' => 0,
            'password' => Hash::make($request->password),
        ]);
        mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'prodi_id' => $request->jurusan_id,
            'jurusan_id' => $request->jurusan_id,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat,
            'jeniskelamin' => $request->jeniskelamin,
            'tgllahir' => $request->tgllahir,
        ]);

        event(new Registered($user));

        // Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
