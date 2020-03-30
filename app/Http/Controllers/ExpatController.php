<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class ExpatController extends Controller
{
    /**
     * @return Factory|View
     */
    public function showIndex()
    {
        return view('expat.index');
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
}
