<?php

namespace App\Notifications;

use App\Models\GarbageOfficer;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewUser extends Notification
{
    use Queueable;

    private $new_garbage_officer;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $new_garbage_officer)
    {
        $this->new_garbage_officer = $new_garbage_officer;
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
        return (new MailMessage)
        ->subject('New user has registered')
        ->line('New user has registered with email ' . $this->new_garbage_officer->email)
        ->line('Reason: '.$this->new_garbage_officer->reason)
        ->action('Approve user', route('admin.users.approve', $this->new_garbage_officer->id))
        ->line('Thank you for using our application!');
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
