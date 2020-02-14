<?php namespace Inc\RestApi;

/**
 *
 * @package Route List
 */

use Inc\Base\BaseController;

class SingleRoute extends BaseController
{

    /**
     *
     * User defined url
     */
    public $userDefinedUrl;

    /**
     *
     * Default base url by basecontroller
     */
    public $myplugin;

    /**
     *
     * Define class
     */
    public $class;

    /**
     *
     * Define class function
     */
    public $func;

    /**
     *
     * function param
     */
    public $func_param;

    /**
     *
     * Constructor
     */
    public function __construct(String $url, String $controller)
    {

        $this->register($url, $controller);
    }

    /**
     * Register
     */
    public function register(String $userDefinedUrl, String $controller)
    {
        /**
         * Define Controller & Function
         */
        list($controller, $this->func) = explode("@", $controller);

        /**
         * Define class with namespace
         */
        $this->class = __NAMESPACE__ . '\Controller\\' . $controller;

        /**
         *
         * Check Error
         */
        $this->checkError();

        /**
         * Define myplugin url path
         */
        $this->myplugin = self::APP_NAME . '/' . self::VERSION;

        /**
         * Set custom url
         */
        $this->setUserDefinedUrl($userDefinedUrl);

    }

    /**
     * User Defined Url Method
     *
     */
    public function setUserDefinedUrl(String $userDefinedUrl)
    {

        /**
         * 
         * Convert into into array
         */
        $keywords = preg_split("/\/:/", $userDefinedUrl);

        // get first param
        $this->userDefinedUrl = array_shift($keywords);

        foreach ( $keywords as $param) {
            $this->userDefinedUrl .= "/(?P<$param>\w+)";
        }

        error_log(print_r($this->userDefinedUrl, true));

    }


    /**
     * 
     * Check Error
     * class name & function name
     */
    public function checkError()
    {
        /**
         * check class is exists or not
         */
        if (!class_exists($this->class)) {
            $error_message = $this->class . ' is not exitst';

            error_log(print_r($error_message, true));

            exit($error_message);
        }

        if (!method_exists(new $this->class, $this->func)) {
            $error_message = $this->func . ' is not exitsts in ' . $this->class;

            error_log(print_r($error_message, true));

            exit($error_message);
        }
    }
}
