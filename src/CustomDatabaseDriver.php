<?php

namespace RannieOllit\CustomDatabaseDriver;

use Illuminate\Notifications\Notification;

class CustomDatabaseChannel
{

  public function send($notifiable, Notification $notification)
  {
    return $notifiable->routeNotificationFor('database')->create([
        'id' => $notification->id,
        'type' => substr(get_class($notification), strrpos(get_class($notification), '\\') + 1),
        'data' => $notification->toDatabase($notifiable),
        'read_at' => null,
    ]);
  }

}
