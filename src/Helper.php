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

    /**
     * My function.
     *
     * @param  mixed $var
     * @return mixed
     */
    public static function run($var = 0)
    {
        $util = \FFI::cdef(
            "void run(int p0);",
            __DIR__ . "/libutil.so"
        );
        
        return $util->run($var);
    }


}