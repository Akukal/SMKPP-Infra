<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $title = 'SMK Prestasi Prima';
    private $desc = 'If Better is Possible, Good is Not Enough';
    private $icon = 'images/smk.png';

    public function index()
    {
        return view('pages.home', [
            'title' => $this->title,
            'desc' => $this->desc,
            'icon' => $this->icon,
        ]);
    }

    public function virtualExperience()
    {
        return view('pages.virtual-experience', [
            'title' => $this->title,
            'desc' => $this->desc,
            'icon' => $this->icon,
        ]);
    }
}
