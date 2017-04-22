<?php
/**
 * Created by PhpStorm.
 * User: anna
 * Date: 17.22.4
 * Time: 21:07
 */

// Autoload files using the Composer autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

use HelloWorld\Greetings;

echo Greetings::sayHelloWorld();