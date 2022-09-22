<?php
use App\Models\Innoweek;

if (!function_exists('_config')) {
    function _config($key)
    {
        $lang = \App::getLocale();
        $settings = Innoweek::select('id', 'address', 'email', 'phone', 'description_' . $lang . ' as text', 'telegram', 'instagram', 'facebook', 'you_tube');
        return $settings->$key;
    }
}
