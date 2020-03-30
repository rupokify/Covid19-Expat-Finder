<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    /**
     * @return Factory|View
     */
    public function showLogin()
    {
        return view('auth.login');
    }

    /**
     * @return Factory|View
     */
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

            session()->flash('type', 'success');
            session()->flash('message', 'Your account is registered.');

            return redirect()->route('login');
        } catch (Exception $e) {
            session()->flash('type', 'danger');
            session()->flash('message', $e->getMessage());

            return redirect()->back();
        }
    }

    /**
     * @param  Request  $request
     * @return RedirectResponse
     */
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

        session()->flash('type', 'danger');
        session()->flash('message', 'Invalid credentials.');

        return redirect()->back();
    }

    /**
     * @return RedirectResponse
     */
    public function logout()
    {
        auth()->logout();
        session()->flash('message', 'You have been logged out.');

        return redirect()->route('login');
    }
}
