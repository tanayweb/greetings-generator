<?php

namespace Tanayweb\GreetingsGenerator\Tests;

use PHPUnit\Framework\TestCase;
use Tanayweb\GreetingsGenerator\Greetings;

class GreetingsTest extends TestCase {
    public function test_it_generates_random_greeting(){
        $messages = ['Hi','Hello','How are you'];
        $this->assertContains(Greetings::get_message(),$messages);
    }
}
