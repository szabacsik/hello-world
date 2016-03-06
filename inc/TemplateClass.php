<?php
/**
 * Created by PhpStorm.
 * User: andra
 * Date: 2016. 03. 06.
 * Time: 18:53
 */

namespace App\MyHelloWorld_One;


class TemplateClass
{
    public $html;
    private $template_keys = array();
    private $template_values = array();
    function __construct ( $template_data )
    {
        $this -> html = file_get_contents ( "tpl/index.tpl.html" );
        $this -> template_keys = array_keys ( $template_data );
        $this -> template_keys = array_map ( function ( $value ) { return '%'.$value.'%'; }, $this -> template_keys );
        $this -> template_values = array_values ( $template_data );
    }
    function render ()
    {
        $this -> html = str_replace ( $this -> template_keys, $this -> template_values, $this -> html );
    }
    function __destruct()
    {
        unset ( $this -> html );
    }
}