<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Queue\SerializesModels;

class ResetPasswordNotification extends Notification
{
    use Queueable, SerializesModels;
    public $name;
    public $subject;
    public $message;
    public $link;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $subject, $message, $link)
    {
        $this->name = $name;
        $this->subject = $subject;
        $this->message = $message;
        $this->link = $link;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->view('emails.reset-password')
            ->with([
                'name' => $this->name,
                'subject' => $this->subject,
                'message' => $this->message,
                'link' => $this->link
            ]);;
    }
}
