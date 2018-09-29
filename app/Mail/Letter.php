<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Letter extends Mailable
{
    use Queueable, SerializesModels;

    private $data = [];

    public function __construct($data)
    {
        unset($data['_token']);
        $this->data = $data;
    }

    public function build()
    {
        return $this->view('emails.default')
        ->with(['data' => $this->data])
        ->subject('Новое письмо');
    }
}
