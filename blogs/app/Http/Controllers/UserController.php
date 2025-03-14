<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{


    public function register(Request $request): string
    {
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3', 'max:20', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required','min:4','max:200'],
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);
        User::create($incomingFields);

        return redirect('/login');

    }

    public function login(Request $request): string
    {
        $incomingFields = $request->validate([
            'loginEmail' => ['required', 'email'],
            'loginPassword' => ['required'],
        ]);

        $user = User::where('email', $incomingFields['loginEmail'])->first();
        if (!$user || !password_verify($incomingFields['loginPassword'], $user->password)) {
            return redirect('/login');
        }

        $request->session()->put('user', $user);
        return redirect('/home');
    }

    public function logout(Request $request): string
    {
        $request->session()->forget('user');
        return redirect('/login');
    }
}
