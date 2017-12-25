<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ContactUs extends Notification
{
    use Queueable;
    public $name;
    public $email;
    public $phone;
    public $msg;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($name,$email,$phone,$message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->msg = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)->view(
        'email' , ['name' => $this->name , 'email' => $this->email ,'phone' => $this->phone , 'msg' => $this->msg]
            );   
    }


}
