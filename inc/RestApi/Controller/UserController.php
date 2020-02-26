<?php namespace Inc\RestApi\Controller;

use WP_REST_Request;
use WP_REST_Response;

class UserController {

    public function index(WP_REST_Request $request)
    {
        error_log(print_r(__NAMESPACE__, true));
        
        $data = array('some', 'response', 'data', 'ddf');


        // Create the response object
        $response = new WP_REST_Response($data);

        // Add a custom status code
        $response->set_status(201);

        return $response;
    }

    public function hasinur(WP_REST_Request $request)
    {
        error_log(print_r(__NAMESPACE__, true));
        
        $data = array('some', 'response', 'data', 'Hasinur');


        // Create the response object
        $response = new WP_REST_Response($data);

        // Add a custom status code
        $response->set_status(201);

        return $response;
    }

    public function sadik(WP_REST_Request $request)
    {
        error_log(print_r(__NAMESPACE__, true));
        
        $data = array('some', 'response', 'data', 'Sadik');


        // Create the response object
        $response = new WP_REST_Response($data);

        // Add a custom status code
        $response->set_status(201);

        return $response;
    }

    public function sourov(WP_REST_Request $request)
    {
        error_log(print_r(__NAMESPACE__, true));
        
        $data = array('some', 'response', 'data', 'Sourov');

        $data = $request['name'];

        // Create the response object
        $response = new WP_REST_Response($data);

        // Add a custom status code
        $response->set_status(201);

        return $response;
    }

    public function sourovid(WP_REST_Request $request)
    {
        error_log(print_r(__NAMESPACE__, true));
        
        $data = array('some','Sourov ID');

        $data = $request['id'];

        // Create the response object
        $response = new WP_REST_Response($data);

        // Add a custom status code
        $response->set_status(201);

        return $response;
    }


    public function name(WP_REST_Request $request)
    {
        error_log(print_r(__NAMESPACE__, true));
        
        $data = array('some','Name');

        $data = $request['address'];

        // Create the response object
        $response = new WP_REST_Response($data);

        // Add a custom status code
        $response->set_status(201);

        return $response;
    }


    
    public function namePut(WP_REST_Request $request)
    {
        error_log(print_r(__NAMESPACE__, true));
        
        $data = array('some','Name');

        $data = $request['address'];

        // Create the response object
        $response = new WP_REST_Response($data);

        // Add a custom status code
        $response->set_status(201);

        return $response;
    }


    public function farazi(WP_REST_Request $request)
    {
        
        $data = array('Farazi','Ahmed');

        // Create the response object
        $response = new WP_REST_Response($data);

        // Add a custom status code
        $response->set_status(201);

        return $response;
    }
}