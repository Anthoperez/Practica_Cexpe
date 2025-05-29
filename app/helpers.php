<?php

if (!function_exists('setActivo')) {
    function setActivo($routeName)
    {
        return request()->routeIs($routeName) ? 'activo' : '';
    }
}