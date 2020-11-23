<?php

if (!function_exists('settings')) {

    /**
     * description
     *
     *
     * @param string $key
     * @return string
     */
    function settings(string $key)
    {
        return \App\Models\Setting::where('key', $key)
            ->first()
            ->pluck('value');
    }
}

if (!function_exists('settingsUpdate')) {

    /**
     * description
     *
     * @param string $key
     * @param string $value
     * @return string
     */
    function settings(string $key, string $value)
    {
        $settings = \App\Models\Setting::where('key', $key)
            ->first();
        $settings->update(['value'=>$value]);
        return $settings;
    }
}
