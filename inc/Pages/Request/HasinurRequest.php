<?php namespace Inc\Pages\Request;

/**
 * 
 * @package
 */

use Inc\Base\BaseController;
use Inc\Pages\Request\RequestInterface;

class HasinurRequest extends BaseController implements RequestInterface {
    
    const NAME_OF_NONCE_FIELD = 'hasinur_nonce_field';
    const NAME_OF_MY_ACTION = 'hasinur_action';

    public function request($post)
    {

        
        error_log(print_r($post, true));
        
    }
}