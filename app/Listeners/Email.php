<?php

namespace App\Listeners;

use App\Events\UserHasRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class Email
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SomeEvent  $event
     * @return void
     */
     //public function welcome(UserHasRegistered $event)
    public function handle(UserHasRegistered $event)
    {
        var_dump('The User '.$event->name.' has registered. Fire off an Email. ');
    }
}
