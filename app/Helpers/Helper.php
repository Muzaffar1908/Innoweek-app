<?php
use App\Models\Innoweek;

if (!function_exists('_config')) {
    function _config($key)
    {
        //$lang = \App::getLocale();
        $settings = Innoweek::findOrFail('1');
        return $settings->$key;
    }
}
