<?php namespace Inc\Base;

/**
 * 
 * 
 * @package Wordpress Starter Plugin
 */

abstract class BaseController {

    /**
     * 
     * Define API version
     */
    const VERSION = 'v1';

    
    const APP_NAME = "wsp";

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


    /**
     * Nonce Verify
     * 
     * @param $
     * 
     * @return boolean
     * 
     */

    public function checkNonce(String $name_of_nonce_field, String $name_of_my_action)
    {
        if (
            !isset($_POST[$name_of_nonce_field])
            || !wp_verify_nonce($_POST[$name_of_nonce_field], $name_of_my_action)
        ) {
            return false;

        } else {
            return true;
        }
    }
}