<?php namespace Inc\Base;

/**
 * 
 * 
 * @package Wordpress Starter Plugin
 */

use Inc\Base\BaseController;
use Inc\Api\RegisterInterface;

class Enqueue extends BaseController implements RegisterInterface {


    /**
     * 
     * @param null
     */
    public function register()
    {
        add_action('admin_enqueue_scripts', [ $this, "addEnqueueScripts" ]);
    }


    /**
     * 
     * 
     */
    public function addEnqueueScripts()
    {
        wp_enqueue_style('mystyle', $this->pluginUrl("assets/css/mystyle.css"));
        // wp_enqueue_script('myscript', $this->pluginUrl("assets/js/myscript.js"));
        wp_enqueue_script('myscript', $this->pluginUrl("dist/main.js"), [], false, true);
    }

}