<?

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class EmailNotification extends Notification
{
    use Queueable;

    protected $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject($this->email)
            ->line('HealthHub')
            ->line('К вам поступила новая запись')
            ->action('Перейти', url('http://localhost/coursachh/public/lk-md'));
    }

    public function toArray($notifiable)
    {
        return [
            // Array representation of the notification
        ];
    }
}