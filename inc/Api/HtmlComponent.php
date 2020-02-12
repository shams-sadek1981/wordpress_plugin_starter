<?php namespace Inc\Api;

/**
 * HTML Component
 * 
 * @package
 */

class HtmlComponent {


    /**
     * 
     */
    public function inputText(Strint $name, String $className=null)
    {
        return "<input type='text' class=" . $className . "/>";
    }
}