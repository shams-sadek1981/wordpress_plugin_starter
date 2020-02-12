<?php

/**
 * Plugin Name:       Wordpress Starter Plugin
 * Plugin URI:        http://wphive.com/
 * Description:       Essential extension for wordpress starter plugin.
 * Version:           1.0.0
 * Requires at least: 5.0
 * Requires PHP:      5.6
 * Author:            Shams Sadek
 * Author URI:        https://github.com/shams-sadek1981/wordpress_plugin_starter
 * License:           GPL v2 or later
 * License URI:       https://github.com/shams-sadek1981/wordpress_plugin_starter
 */



if (!defined('ABSPATH')) {
    exit;
}

if (!file_exists(__DIR__ . "/vendor/autoload.php")) {
    exit('Please run `composer install or dump-autoload`');
}

require_once __DIR__ . "/vendor/autoload.php";

/**
 * Initialize classes
 */
use Inc\Base\BaseController;
use Inc\Init;

/**
 * set initial variable
 */
BaseController::setPluginPath(plugin_dir_path(__FILE__));
BaseController::setPluginUrl(plugin_dir_url(__FILE__));
BaseController::setPluginBasename(plugin_basename(__FILE__));

/**
 * register services
 *
 * @param null
 */
Init::registerServices();
