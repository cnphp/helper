<?php

namespace Cnphp\Helper;

// Load the global function
require_once __DIR__.'/functions.php';

class Helper
{
    /**
     * My function.
     *
     * @param  mixed  $var
     * @return mixed
     */
    public static function my_function($var)
    {
        return $var;
    }
}