<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'SMK Prestasi Prima';
        $desc = 'Situs Resmi SMK Prestasi Prima';
        $icon = 'images/smk.png';

        return view('pages.home', with([
            'title' => $title,
            'desc' => $desc,
            'icon' => $icon,
        ]));
    }

    public function virtualExperience()
    {
        return view('pages.virtual-experience');
    }
}
