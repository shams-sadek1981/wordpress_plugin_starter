<?php namespace Inc\Page;

/**
 *
 * @package
 */

use Inc\Api\AdminCallback;
use Inc\Api\SettingsApi;
use Inc\Base\BaseController;
use Inc\Api\RegisterInterface;

class AdminPage extends BaseController implements RegisterInterface
{

    /**
     * Add SettingsApi class
     */
    public $settings;

    /**
     * Add AdminPage class
     */
    public $adminPage;

    /**
     * Admin Callback
     */
    public $callback;

    /**
     * list of admin pages
     */
    public $pages;

    /**
     *
     * SubPages
     */
    public $subpages;

    /**
     *
     */
    public function __construct()
    {
        $this->settings = new SettingsApi;
        $this->callback = new AdminCallback();

        // set pages
        $this->setAdminPages();
        $this->setAdminSubPages();
    }

    /**
     * Register
     *
     * @param null
     */
    public function register()
    {
        $this->settings->addPages($this->pages)
            ->withSubpage('Dashboard')
            ->addSubPages($this->subpages)
            ->register();
    }



    private function setAdminPages()
    {
        $this->pages = [
            [
                'page_title'    => 'Wordpress starter plugin',
                'menu_title'    => 'WSP',
                'capability'    => 'manage_options',
                'menu_slug'     => 'WSP',
                'callback'      => [$this->callback, "dashboard"],
                'icon_url'      => "dashicons-store",
                'position'      => 110,
            ],
        ];
    }

    /**
     * Set sub menu page
     * 
     * 
     */
    private function setAdminSubPages()
    {
        $admin_page = $this->pages[0];

        $this->subpages = [
            // [
            //     'parent_slug' => $admin_page['menu_slug'],
            //     'page_title' => 'CPT',
            //     'menu_title' => 'CPT',
            //     'capability' => 'manage_options',
            //     'menu_slug' => 'WSP_CPT',
            //     'callback' => function () {echo "<h1>Custom Post type</h1>";},
            // ],
            // [
            //     'parent_slug' => $admin_page['menu_slug'],
            //     'page_title' => 'Settings',
            //     'menu_title' => 'Settings',
            //     'capability' => 'manage_options',
            //     'menu_slug' => 'WSP_Settings',
            //     'callback' => [$this->callback, "settings"],
            // ],
            // [
            //     'parent_slug' => $admin_page['menu_slug'],
            //     'page_title' => 'Talha',
            //     'menu_title' => 'Talha',
            //     'capability' => 'manage_options',
            //     'menu_slug' => 'talha',
            //     'callback' => [$this->callback, "talha"],
            // ],
            // [
            //     'parent_slug' => $admin_page['menu_slug'],
            //     'page_title' => 'Hasinur',
            //     'menu_title' => 'Hasinur',
            //     'capability' => 'manage_options',
            //     'menu_slug' => 'hasinur',
            //     'callback' => [$this->callback, "hasinur"],
            // ],
        ];
    }

}
