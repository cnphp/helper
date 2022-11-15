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



if (!function_exists('php_call_script')) {
    /**
     * @param mixed
     * @return void
     */
    function php_call_script($var = 0)
    {
        return Helper::call_script($var);
    }
}


if (!function_exists('php_get_sh_uuid')) {
    /**
     * @param  mixed $typeid
     * @param  mixed $clientType
     * @param  mixed $cityid
     * @return mixed
     */
    function php_get_sh_uuid($typeid, $clientType, $cityid=0)
    {
        return Helper::get_sh_uuid($typeid, $clientType, $cityid);
    }
}