<?php

return [
    'driver'      => env('ISSUES_DRIVER', 'bitbucket'),
    'credentials' => [
        'driver'   => env('BITBUCKET_DRIVER', 'basic'), //basic, oauth
        'key'      => env('BITBUCKET_KEY'),           //oauth
        'secret'   => env('BITBUCKET_SECRET'),        //oauth
        'user'     => env('BITBUCKET_USER'),          //basic auth
        'password' => env('BITBUCKET_PASSWORD'),       //basic auth
    ],
    'repositories' => [
        'Dentix'        => 'DentonsCreative/dentix',
        'Dento'         => 'DentonsCreative/dento',
        'Dentons Intra' => 'DentonsCreative/intra2',
        'Dentons.net'   => 'DentonsCreative/new-dentonsnet',
        'Laravel Blog'  => 'DentonsCreative/laravel-blog',
        'WP Theme'      => 'DentonsCreative/Wordpress-Theme-Adjustments',
        'WP Elementor'  => 'DentonsCreative/Elementor-Theme',
    ],
];
