<?php

namespace App\Helpers;


if (!function_exists('response')) {
    function response()
    {
        return new Response();
    }
}



