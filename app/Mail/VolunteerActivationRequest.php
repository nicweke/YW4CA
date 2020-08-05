<?php

namespace App\Mail;

use App\Volunteer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VolunteerActivationRequest extends Mailable
{
    use Queueable, SerializesModels;

    public $volunteer;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Volunteer $volunteer)
    {
        $this->volunteer = $volunteer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.admin.volunteer');
    }
}
