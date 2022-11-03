<?php

use Cnphp\Helper\Helper;

if (!function_exists('my_function')) {
    /**
     * @param mixed $var
     * @return void
     */
    function my_function($var)
    {
        return Helper::my_function($var);
    }
}



if (!function_exists('my_go')) {
    /**
     * @param mixed
     * @return void
     */
    function my_go($var = 0)
    {
        return Helper::run($var);
    }
}