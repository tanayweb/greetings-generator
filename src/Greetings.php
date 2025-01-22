<?php

namespace Tanayweb\GreetingsGenerator;

class Greetings {
    private static $messages = ['Hi','Hello','How are you'];
    public static function get_message(){
        return self::$messages[array_rand(self::$messages)];
    }
}
echo Greetings::get_message();