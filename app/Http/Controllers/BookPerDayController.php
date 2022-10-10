<?php

namespace App\Http\Controllers;

use App\TravelPackage;
use Illuminate\Http\Request;

class BookPerDayController extends Controller
{
    public function index()
    {
        $bookperday = TravelPackage::with('galleries')->orderBy('id', 'DESC')->first();
        return view('pages.bookperday', compact('bookperday'));
    }
}
