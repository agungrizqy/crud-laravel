<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function dataAbout() {
        return view('about', [
            "title" => "About",
            "name" => "Agung Rizqy Wiryawan",
            "email" => "agungrizqy13@gmail.com"
        ]);
    }
}
