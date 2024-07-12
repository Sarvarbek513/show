<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('currentRouteName')) {
    function currentRouteName() {
        return Route::currentRouteName();
    }
}