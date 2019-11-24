<?php


namespace AnthraxisBR\FastWorkEcosystem\Helpers;

use Composer\Script\Event;

class Scaffold
{
    public function __construct()
    {

    }


    public static function run(Event $event)
    {
        $composer = $event->getComposer();
        ddd($composer);
        echo 'autoloadable';
    }


    public static function warmCache(Event $event)
    {

        // make cache toasty
    }
}