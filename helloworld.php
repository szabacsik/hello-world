<?php
/**
 * Created by PhpStorm.
 * User: andras
 * Date: 2016. 03. 06.
 * Time: 16:16
 */

use App\MyHelloWorld_One as HelloWorldApp;
use App\MyHelloWorld_One\HelloWorld;

require_once ('inc/HelloWorldClass_One.php');
require_once ('inc/HelloWorldClass_Two.php');
require_once ('inc/TemplateClass.php');

$hello = new HelloWorld("<br>");
$template = new \App\MyHelloWorld_One\TemplateClass(array('title'=>'Hello World','body'=>$hello->hello));
$template -> render();
print $template->html;
