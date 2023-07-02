<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class AccountActivation extends Notification implements ShouldQueue
{
    use Queueable;

    public $tries = 5;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
        if($notifiable->active){
            return (new MailMessage)
                ->subject('Account Activated')
                ->greeting("Hello {$notifiable->name}!")
                ->line('Your account has been activated. You can now log in.')
                ->action('Click to login', url('/login'))
                ->line('Thank you for using our application!')
                ->salutation(new HtmlString("Best Regards, <br>Admin"));
        }else{
            return (new MailMessage)
            ->subject('Deactivation of Account')
            ->greeting("Hello {$notifiable->name}!")
            ->line('Your account has been deactivated. We regret any inconvenience')
            ->salutation(new HtmlString("Best Regards, <br>Admin"));
        }
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
