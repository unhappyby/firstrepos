<?php

namespace App\Listeners;

use App\Events\StudentAdded;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class HandlerNewStudentAdded
{
    protected $name;
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
     * @param  Event  $event
     * @return void
     */
    public function handle(StudentAdded $event)
    {
        $this->name = $event->name;
        echo "<br>New Student added in database with name: ".$this->name;
    }
}
