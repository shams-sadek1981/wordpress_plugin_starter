<?php namespace Inc\Api;

/**
 * 
 * 
 * @package
 */

class SettingsApi {

    public $admin_pages = [];
    public $admin_subpages = [];


    public function register()
    {
        if ( ! empty($this->admin_pages) ) {
            add_action('admin_menu', [ $this, "addAdminMenu"]);
        }
    }


    /**
     * Add Admin Menu
     * 
     */
    public function addAdminMenu()
    {
        $this->addMenuPage();
        $this->addSubMenuPage();
    }


    /**
     * 
     */
    public function addPages(array $pages)
    {
        $this->admin_pages = $pages;

        return $this;
    }

    /**
     * 
     */
    public function addSubPages(array $pages)
    {
        $this->admin_subpages = array_merge($this->admin_subpages, $pages);

        return $this;
    }




    /**
     * 
     * 
     * @param String $title
     */
    public function withSubPage(String $title=null)
    {
        if ( empty($this->admin_pages)) {
            return $this;
        }

        $admin_page = $this->admin_pages[0];

        $sub_page = [
            [
                'parent_slug'   => $admin_page['menu_slug'],
                'page_title'    => $admin_page['page_title'],
                'menu_title'    => $title,
                'capability'    => $admin_page['capability'],
                'menu_slug'     => $admin_page['menu_slug'], 
                'callback'      => $admin_page['callback']
            ]
        ];

        $this->admin_subpages = $sub_page;

        return $this;

    }


    


    /**
     * Menu Page add
     * 
     * @param null
     * @return null
     */
    private function addMenuPage()
    {
        foreach( $this->admin_pages as $page) {
            add_menu_page(
                $page['page_title'],
                $page['menu_title'],
                $page['capability'],
                $page['menu_slug'],
                $page['callback'],
                $page['icon_url'],
                $page['position']
            );
        }
    }


    /**
     * Sub Menu Page add
     * @param null
     */
    private function addSubMenuPage()
    {
        foreach( $this->admin_subpages as $page) {
            add_submenu_page(
                $page['parent_slug'],
                $page['page_title'],
                $page['menu_title'],
                $page['capability'],
                $page['menu_slug'],
                $page['callback']
            );
        }
    }

}