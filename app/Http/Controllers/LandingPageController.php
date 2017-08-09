<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Mail\LandingPageContact;
use Illuminate\Support\Facades\Mail;

class LandingPageController extends Controller
{

    /**
     * @param Request $request
     * @param Contact $contact
     * @return mixed
     */
    public function email(Request $request, Contact $contact)
    {

         $this->validate($request, [
            'email' => 'bail|required|email|min:6|max:255',
            'message' => 'required|min:8|max:640',
            'g-recaptcha-response' => 'recaptcha|required'
        ]);
        $contact->create([
            'address' => $request->email,
            'message' => $request->message,
        ]);

        // send email to mailgun, which will distribute to administrators
        Mail::to('landingpage@mg.copacetic.co')->send(new LandingPageContact());
        return \Redirect::route('welcome')->with('success', 'Thanks for writing, we will respond as soon as possible.' );
    }
}
