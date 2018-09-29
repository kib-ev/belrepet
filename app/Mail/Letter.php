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
<<<<<<< HEAD
        ->with(['data' => $this->data]);
=======
        ->with(['data' => $this->data])
        ->subject('Новое письмо');
>>>>>>> 6ad7ec3ee6cc291544368ff1896a29ec0fa93303
    }
}
