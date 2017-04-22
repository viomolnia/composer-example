<?php
/**
 * Created by PhpStorm.
 * User: anna
 * Date: 17.22.4
 * Time: 20:50
 */

namespace HelloWorld;

use PHP_Timer;

class Greetings {
    public static function sayHelloWorld() {
        $timer = new PHP_Timer();
        $timer->start();
        return "Hello World\n" . $timer->resourceUsage() . "\n";
    }
}