<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    /**
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function createUser(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'location' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $inputs = $request->except(['_token']);
        $inputs['password'] = bcrypt($inputs['password']);

        try {
            $user = User::create($inputs);
            event(new Registered($user));

            session()->flash('message', 'Your account is registered.');

            return redirect()->route('login');
        } catch (Exception $e) {
            session()->flash('message', $e->getMessage());

            return redirect()->back();
        }
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->except(['_token']);

        if (auth()->attempt($credentials)) {
            return redirect()->route('home');
        }

        session()->flash('message', 'Invalid credentials.');

        return redirect()->back();
    }

    public function logout()
    {
        auth()->logout();
        session()->flash('message', 'You have been logged out.');

        return redirect()->route('login');
    }
}
