<?php namespace Inc\Pages\Request;

/**
 *
 *
 * @package
 */

use Inc\Pages\Request\RequestFilter;

class RequestHandler
{

    /**
     * 
     * define all classes
     */
    private static $request_classes = [
        SettingsRequest::class,
        HasinurRequest::class,
    ];


    public function __construct()
    {
        foreach (self::$request_classes as $class) {
            new RequestFilter(new $class);
        }
    }

}
