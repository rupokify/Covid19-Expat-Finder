<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * @return Factory|View
     */
    public function showDashboard()
    {
        return view('dashboard');
    }

    /**
     * @return Factory|View
     */
    public function showProfile()
    {
        $data = [];
        $data['user'] = auth()->user();

        return view('profile', $data);
    }

    /**
     * @param  Request  $request
     * @return Factory|View|RedirectResponse
     */
    public function updateProfile(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'location' => 'required',
            'email' => 'required|email'
        ]);

        try {
            $inputs = $request->except(['_token']);
            optional(auth()->user())->update($inputs);

            session()->flash('type', 'success');
            session()->flash('message', 'Your profile is updated.');

            return redirect()->back();
        } catch (Exception $e) {
            session()->flash('type', 'danger');
            session()->flash('message', $e->getMessage());

            return redirect()->back();
        }
    }

    /**
     * @return Factory|View
     */
    public function showVerification()
    {
        return view('verification');
    }

    /**
     * @return Factory|View
     */
    public function showReports()
    {
        return view('reports');
    }
}
