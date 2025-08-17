<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $transparent = true;

        return view('pages.home', [
            'isHome' => true,
        ]);
    }

    public function virtualExperience()
    {
        return view('pages.virtual-experience');
    }
}
