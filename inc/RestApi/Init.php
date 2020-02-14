<?php namespace Inc\RestApi;

/**
 *
 *
 * /wpjson/
 */
use WP_REST_Server;
use WP_REST_Response;
use WP_REST_Request;

use Inc\Api\RegisterInterface;
use Inc\Base\BaseController;

class Init extends BaseController implements RegisterInterface
{


    public static function getApis()
    {
        return [
            UserRoute::class
        ];
    }


    public static function registerRoutes()
    {
        foreach( self::getApis() as $class) {
            (new $class)->register();
        }
    }

    public function register()
    {
        self::registerRoutes();
    }
}