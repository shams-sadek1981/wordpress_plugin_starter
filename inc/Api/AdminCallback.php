<?php namespace Inc\Api;

/**
 * 
 * @package
 */


use Inc\Base\BaseController;

class AdminCallback extends BaseController {

    public function dashboard()
    {
        require_once $this->pluginPath("templates/dashboard.php");
    }

    public function settings()
    {
        require_once $this->pluginPath("templates/settingsTemplate.php");
    }
}