<?php namespace Inc\Pages\Request;

/**
 * 
 * @package
 */

use Inc\Base\BaseController;
use Inc\Pages\Request\RequestInterface;
use Inc\Pages\Request\RequestField;

class RequestFilter extends BaseController{


    public $obj;

    public function __construct(RequestInterface $obj)
    {
        $this->obj = $obj;

        add_action("admin_init", [ $this, "request" ]);

    }

    public function request()
    {
        if ( ! $this->checkNonce($this->obj::NAME_OF_NONCE_FIELD, $this->obj::NAME_OF_MY_ACTION)) return;

        // you can set post validation or filter or RequestClass
        $this->obj->request($_POST);
    }
    
}