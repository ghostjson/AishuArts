<?php

if (!function_exists('menu')) {

    /**
     * description
     *
     * @param
     * @return string
     */
    function menu($route)
    {
        if(\Illuminate\Support\Facades\Request::route()->getName() === $route)
        {
            return 'active';
        }else{
            return 'none';
        }
    }
}
