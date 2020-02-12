<?php namespace Inc\Api;

/**
 *
 * @package
 */

use Inc\Base\BaseController;
use Inc\Pages\Request\RequestHandler;

class AdminCallback extends BaseController
{

    public function __construct()
    {
        
        /**
         * 
         * request handler for all request
         */
        new RequestHandler();

    }

    public function dashboard()
    {
        require_once $this->pluginPath("templates/dashboard.php");
    }

    public function settings()
    {
        require_once $this->pluginPath("templates/settingsTemplate.php");
    }

    public function talha()
    {
        require_once $this->pluginPath("templates/talhaTemplate.php");
    }

    public function hasinur()
    {
        require_once $this->pluginPath("templates/hasinurTemplate.php");
    }

}
