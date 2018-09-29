<?php

namespace App\Http\Controllers;

use App\Mail\Letter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    protected $mailTo = 'info@belrepet.by';
    protected $mailFrom = 'info@belrepet.by';

    protected $subject = 'Новое сообщение с сайта';

    public function send_mail() 
    {
        $data = request()->all();
        $this->sendMail($data);

        return redirect()->back()->withErrors(['msg' => 'ok'])->withInput();
    }

    public function send_mail_ajax() 
    {
        $data = request()->all();
        $this->sendMail($data);

        return ['status' => 'ok'];
    }

    private function sendMail($data) {
        $letter = new Letter($data);
        $letter->subject($this->subject);
        $letter->from($this->mailFrom);
        Mail::to($this->mailTo)->send($letter);
    }
}
