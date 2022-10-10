<?php

namespace App\Http\Controllers;

use App\TravelPackage;
use Illuminate\Http\Request;
use App\Rate;
class DetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = TravelPackage::with('galleries')
            ->with(['rates' => function($q){
                $q->orderBy('id', 'DESC');
            }])
            ->where('slug', $slug)
            // ->orderBy('')
            ->firstOrFail();
        return view('pages.detail',[
            'item' => $item
        ]);
    }

    public function rate(Request $request)
    {
        $rate = Rate::create($request->all());

        if($rate){
            return true;
        }else{
            return false;
        }
    }
}
