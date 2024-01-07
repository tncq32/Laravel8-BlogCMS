<?php

namespace App\Notifications;

use App\Models\Blog;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BlogNotification extends Notification
{
    use Queueable;

    protected $blog;

    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Yeni bir blog eklendi.')
            ->action('Bloga Git', url('/blogs/' . $this->blog->id))
            ->line('Teşekkür ederiz!');
    }

    public function toArray($notifiable)
    {
        return [
            'message' => 'Yeni bir blog eklendi: ' . $this->blog->title,
            'link' => url('/blogs/' . $this->blog->id),
            'blog_title' => $this->blog->title,
            'read_at' => now(), // Bildirim tıklandığında okundu olarak işaretle
        ];
    }

    public function toDatabase($notifiable)
    {
        return [
            'message' => 'Yeni bir blog eklendi: ' . $this->blog->title,
            'link' => url('/blogs/baslik-' . $this->blog->id),
            'blog_title' => $this->blog->blog_title,
            'read_at' => now(), // Bildirimi okundu olarak işaretle
        ];
    }

    public function via($notifiable)
    {
        return ['mail', 'database']; // E-posta ve veritabanı kanallarını kullanabilirsiniz.
    }
}
