**Custom Database Driver For Laravel**

Simplified the notification type of Laravel Database Notifications.

Before: 

     { "type":"App\\Notifications\\API\\v1\\Vehicles\\VehicleDeletedNotification",

After: 

    {	"type": "VehicleDeletedNotification",

**Installation:**

In your terminal type,

    $ composer require einnar82/custom-database-driver

Then, change your notification class driver into,

    use RannieOllit\CustomDatabaseDriver\CustomDatabaseChannel;    

    /**
        * Get the notification's delivery channels.
        *
        * @param mixed $notifiable
        * @return array
        */
    
    public  function  via($notifiable)
    {
	    return  [CustomDatabaseChannel::class];
    }

