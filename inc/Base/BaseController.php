<?php namespace Inc\Base;

/**
 * 
 * 
 * @package Wordpress Starter Plugin
 */

abstract class BaseController {

    /**
     * plugin dir path
     * 
     */
    private static $plugin_path;


    /**
     * plugin dir url
     * 
     */
    private static $plugin_url;


    /**
     * plugin basename
     * 
     */
    private static $plugin_basename;



    public static function setPluginPath(String $path)
    {
        self::$plugin_path = $path;
    }



    /**
     * set plugin url
     * 
     */
    public static function setPluginUrl(String $url)
    {
        self::$plugin_url = $url;
    }


    /**
     * set plugin basename
     */
    public static function setPluginBasename(String $basename)
    {
        self::$plugin_basename = $basename;
    }


    /**
     * 
     * @param $path
     * @return plugin path
     */
    public function pluginPath(String $path=null)
    {
        return self::$plugin_path . $path;
    }


    /**
     * 
     * @param $url
     * @return plugin url
     */
    public function pluginUrl(String $url=null)
    {
        return self::$plugin_url . $url;
    }


    /**
     * 
     * @param $basename
     * @return plugin basename
     */
    public function pluginBasename(String $basename=null)
    {
        return self::$plugin_basename . $basename;
    }

}