<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function indexUser()
    {
        return view('pages.about.index');
    }
}
