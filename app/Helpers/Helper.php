<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('isActiveRouteForHeader')) {
    function isActiveRouteForHeader(array $item): bool
    {
        if (!empty($item['link']) && Route::is($item['link'])) {
            return true;
        }

        return false;
    }
}
