<?php namespace Inc\Page;

/**
 * 
 * @package
 */


use Inc\Base\BaseController;

class AdminPage extends BaseController {

    public function register()
    {
        add_action('admin_menu', [ $this, "addAdminMenu"]);
    }

    public function addAdminMenu()
    {
        
    }
}