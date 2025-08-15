<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $transparent = true;

        return view('home', [
            'isHome' => true,
        ]);
    }
}
