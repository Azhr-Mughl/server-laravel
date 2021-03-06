<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HaoSaudiMail extends Mailable
{
    use Queueable, SerializesModels;
    public $mailData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = 'HaoSaudi | ' . $this->mailData['template'];
        $markdown = 'Email.' . $this->mailData['template'];
        return $this->from('contact@azharmughal.com', 'azharmughal.com')
            ->subject($subject)
            ->markdown($markdown)
            ->with(
                [
                    'data' => $this->mailData
                ]
            );
    }
}
