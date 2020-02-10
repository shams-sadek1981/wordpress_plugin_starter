<?php namespace Inc;

/**
 * Initialize all classes & register 
 * 
 * @package wordpress_starter_plugin
 */


final class Init {

    /**
     * initialize all classes
     * 
     * @param null
     */
    public static function getServices()
    {
        return [
            Base\Enqueue::class,
            Page\AdminPage::class,
        ];
    }

    
    /**
     * Register classes
     * 
     * @param null
     */
    public static function registerServices()
    {
        foreach( self::getServices() as $class) {
            (new $class)->register();
        }
    }

}