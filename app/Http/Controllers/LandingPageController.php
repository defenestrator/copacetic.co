<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function email(Request $request)
    {
//        dd($request);
        // send email to mailgun, distribute to
        return \Redirect::route('welcome')->with('success', 'Thanks for contacting us, we will respond as soon as possible.' );
    }
}
