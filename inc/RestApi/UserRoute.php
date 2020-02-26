<?php namespace Inc\RestApi;

/**
 * 
 * @package WSP
 */

use Inc\RestApi\Route;
use Inc\RestApi\Controller\UserController;


class UserRoute {


    public function register()
    {
        
        Route::GET('/user/:name', 'UserController@index');
        
        Route::GET('/user/sadik', 'UserController@sadik');

        Route::GET('/farazi', 'UserController@farazi');
        
        // Route::GET('/user/index', 'UserController@index');
        
        // Route::GET('/user/hasinur', 'UserController@hasinur');
        
        
        // Route::GET('/user/sourov', 'UserController@sourov');
        
        // Route::GET('/user/sourov/:id', 'UserController@sourovid');
        
        // Route::post('/user/name', 'UserController@name');
        
        // Route::PUT('/user/name', 'UserController@namePut');
        
    }
}