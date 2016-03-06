<?php
/**
 * Created by PhpStorm.
 * User: andras
 * Date: 2016. 03. 06.
 * Time: 16:16
 */

use App\MyHelloWorld_Two as HelloWorldApp;
use App\MyHelloWorld_Two\HelloWorld;

require_once ('inc/HelloWorldClass_One.php');
require_once ('inc/HelloWorldClass_Two.php');


$hello = new HelloWorld("<br>");
