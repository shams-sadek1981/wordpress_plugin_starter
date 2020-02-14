<?php namespace Inc\RestApi;

/**
 *
 * @package Route
 */

use Inc\RestApi\SingleRoute;

class Route
{

    /**
     * GET Method
     * 
     * @param $url, $controller
     */
    public static function GET(String $url, String $controller)
    {

        /**
         * set all property
         * 
         * Instantiate Single Route
         */
        $obj = new SingleRoute($url, $controller);


        /**
         * 
         * Register GET Routes
         */
        self::registerRoute($obj, "GET");
        
    }


    /**
     * POST Method
     * 
     * @param $url, $controller
     */
    public static function POST(String $url, String $controller)
    {

        /**
         * set all property
         * 
         * Instantiate Single Route
         */
        $obj = new SingleRoute($url, $controller);


        /**
         * 
         * Register POST Routes
         */
        self::registerRoute($obj, "POST");
        
    }


    /**
     * PUT Method
     * 
     * @param $url, $controller
     */
    public static function PUT(String $url, String $controller)
    {

        /**
         * set all property
         * 
         * Instantiate Single Route
         */
        $obj = new SingleRoute($url, $controller);


        /**
         * 
         * Register POST Routes
         */
        self::registerRoute($obj, "PUT");
        
    }


    /**
     * DELETE Method
     * 
     * @param $url, $controller
     */
    public static function DELETE(String $url, String $controller)
    {

        /**
         * set all property
         * 
         * Instantiate Single Route
         */
        $obj = new SingleRoute($url, $controller);


        /**
         * 
         * Register POST Routes
         */
        self::registerRoute($obj, "PUT");
        
    }



    /**
     * 
     * @param $routeMentod
     * 
     * Register Route by action
     */
    public static function registerRoute(SingleRoute $obj, String $routeMethod)
    {
        add_action('rest_api_init', function () use ($obj, $routeMethod){
            register_rest_route($obj->myplugin, $obj->userDefinedUrl, array(
                'methods' => $routeMethod,
                'callback' => [new $obj->class, $obj->func],
            ));
        });
    }
}