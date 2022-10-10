<?php

namespace App\Http\Controllers;

use App\TravelPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     Auth::guard('')
    // }
    public function index(Request $request)
    {
        $items = TravelPackage::with(['galleries'])->where('type_travel', '!=', 'bookperday')->paginate(8);

        return view('pages.home',[
            'items' => $items
        ]);
    }
}
