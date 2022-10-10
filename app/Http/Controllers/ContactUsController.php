<?php

namespace App\Http\Controllers;
use Mail;
use App\User;
// use Redirect,Response,DB,Config;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('pages.contactus');
    }

    public function send(Request $request)
    {
        // dd($request->all());
        $data =  $request->all();

        Mail::send('pages.sendEmail', $data, function($message) {
            $admin = User::where('roles', 'ADMIN')->first();

            $message->to($admin->email, $admin->name)

                    ->subject('Contact Us');
        });

       return redirect()->back();
    }
}
