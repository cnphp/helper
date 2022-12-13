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
    public static function call_script($var = 0)
    {
        $util = \FFI::cdef(
            "void callScript(int p0);",
            __DIR__ . "/libutil.so"
        );
        
        return $util->callScript($var);
    }

     /**
     * My function.
     *
     * @param  mixed $typeid
     * @param  mixed $clientType
     * @param  mixed $cityid
     * @return mixed
     */
    public static function get_sh_uuid($typeid, $clientType, $cityid=0)
    {
        $util = \FFI::cdef(
            "typedef struct { char* p; long n } GoString;
            typedef long GoInt;
            char*  getShUuid(GoInt p0, GoString p1, GoInt p2);",
            __DIR__ . "/libutil.so"
        );

        $clientStr = makeGoStr($util, $clientType);
        $result = $util->getShUuid($typeid, $clientStr, $cityid);
        $words = \FFI::string($result);
       
        sleep(1);
        //FFI::free($result);
        //echo  $words;
        return json_decode($words, true);
    }

    
    public function makeGoStr(\FFI $ffi, string $str): \FFI\CData
    {
        $goStr = $ffi->new('GoString', 0);
        $size = strlen($str);
            $cStr = \FFI::new("char[$size]", 0);

        \FFI::memcpy($cStr, $str, $size);
        $goStr->p = $cStr;
        $goStr->n = strlen($str);
        return $goStr;
    }

}



