<?php

namespace App\Mail;

use App\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class LandingPageContact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Contact
     */
    protected $contact;

    /**
     * LandingPageContact constructor.
     * @param Contact $contact
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return $this
     */
    public function build()
    {
//        dd($this->contact);
        return $this->view('mail.landing-page')
            ->with([
                'data' => $this->contact
            ]);
    }
}
