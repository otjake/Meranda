<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PostCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $justCreated;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($justCreated)
    {
        $this->justCreated=$justCreated;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.post-created');
    }
}
