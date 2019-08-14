<?php

namespace App\Http\Controllers;

use App\Property;
use App\PropertyType;
use App\SponsoredProperty;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['indexAdmin']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function indexAdmin()
    {
        $data = [
            'countPropertyType' => PropertyType::count(),
            'countProperty' => Property::count(),
            'countSponsoredProperty' => SponsoredProperty::count()
        ];
        return view('administrator.home', compact('data'));
    }


}
