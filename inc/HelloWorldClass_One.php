<?php
/**
 * Created by PhpStorm.
 * User: andra
 * Date: 2016. 03. 06.
 * Time: 16:08
 */

namespace App\MyHelloWorld_One;

class HelloWorld
{
    private $linebreak;
    function __construct ( $_linebreak )
    {
        $this -> linebreak = $_linebreak;
        print "Hello World" . $this -> linebreak;
    }
    function __destruct () {
        print "Goodbye World" . $this -> linebreak;
    }
}

