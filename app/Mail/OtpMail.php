<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OtpMail extends Mailable
{
    use Queueable, SerializesModels;

    public $otp;
    public $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($otp, $name)
    {
        $this->otp = $otp;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('verify@paciflix.darwinrg.tech', 'Paciflix')
            ->subject('Your OTP Code')
            ->view('emails.otp')
            ->with([
                'otp' => $this->otp,
                'name' => $this->name,
            ]);
    }
}