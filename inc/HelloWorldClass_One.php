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
    public $hello;
    public $bye;
    function __construct ( $_linebreak )
    {
        $this -> linebreak = $_linebreak;
        $this -> hello = "Hello World" . $this -> linebreak;
        $this -> bye = "Goodbye World" . $this -> linebreak;
    }
    function __destruct () {
    }
}

