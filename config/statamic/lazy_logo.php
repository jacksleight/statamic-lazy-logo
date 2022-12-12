<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Text
    |--------------------------------------------------------------------------
    |
    | The logo text.
    |
    */

    'text' => env('APP_NAME', 'Statamic'),

    /*
    |--------------------------------------------------------------------------
    | Color
    |--------------------------------------------------------------------------
    |
    | The logo text color. Use an array to create a color gradient.
    |
    */

    'color' => '#19292f',

    /*
    |--------------------------------------------------------------------------
    | Font
    |--------------------------------------------------------------------------
    |
    | The logo font attributes.
    |
    */

    'font_family' => 'Inter UI,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Cantarell,Fira Sans,Droid Sans,Helvetica Neue',

    'font_size' => '20px',

    'font_weight' => '500',

    'font_shift' => '1',

    /*
    |--------------------------------------------------------------------------
    | Background
    |--------------------------------------------------------------------------
    |
    | The outside (login pages) background color. Use an array to create a
    | color gradient.
    |
    */

    'background' => null,

    /*
    |--------------------------------------------------------------------------
    | Outside
    |--------------------------------------------------------------------------
    |
    | All of the options above can be overidden for outside (login etc.) pages.
    |
    */

    'outside' => [
        // 'color' => '#ffffff',
        // 'background' => '#19292f',
    ],

];
