<?php

namespace App\Http\Controllers;

use App\Events\ExpatReported;
use App\Models\Expat;
use App\Models\User;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ExpatController extends Controller
{
    /**
     * @return Factory|View
     */
    public function showIndex()
    {
        /** @var User $user */
        $user = auth()->user();

        if (auth()->user()->role === 'user') {
            $expats = $user->expats()->paginate();
        } else {
            $expats = Expat::paginate();
        }

        return view('expat.index', compact('expats'));
    }

    /**
     * @return Factory|View
     */
    public function expatsMap()
    {
        return view('expat.map');
    }

    /**
     * @return Factory|View
     */
    public function addExpatForm()
    {
        return view('expat.create');
    }

    public function addExpat(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'location' => 'required',
            'gender' => 'required',
            'quarantine_status' => 'required',
        ]);

        try {
            $inputs = $request->except(['_token']);
            $inputs['user_id'] = auth()->user()->id;
            $expat = Expat::create($inputs);
            event(new ExpatReported($expat));

            session()->flash('type', 'success');
            session()->flash('message', 'Your report has been stored. We will forward it to the respected authority.');

            return redirect()->route('expats.index');
        } catch (Exception $e) {
            session()->flash('type', 'danger');
            session()->flash('message', $e->getMessage());

            return redirect()->back();
        }
    }
}
