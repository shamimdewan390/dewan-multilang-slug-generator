<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Slug default separator.
    |--------------------------------------------------------------------------
    |
    | If no separator is passed, then this default separator will be used as slug.
    |
    */
    'separator' => '-',

   
    /*
    |--------------------------------------------------------------------------
    | Slug random text or number
    |--------------------------------------------------------------------------
    |
    | If slug already exist then by default slug will generated by random string like. 
    | test-zFU, test-W1U, test-0FR ....
    |
    | If false then slug will generated by number like
    | test-1, test-2, test-3 .... test-100
    |
    */
    'unique_slug' => true,

     /*
    |--------------------------------------------------------------------------
    | Slug random text limit
    |--------------------------------------------------------------------------
    |
    | Default 3 text key added in slug, the slug will generated like
    | test-zFU, test-W1U, test-0FR ....
    |
    */
    'random_text' => 3,
     /*
    |--------------------------------------------------------------------------
    | Slug max count limit
    |--------------------------------------------------------------------------
    |
    | Default 100, slug will generated like
    | test-1, test-2, test-3 .... test-100
    |
    */
    'max_count' => 100,
];