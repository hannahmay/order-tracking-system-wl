<?php
/**
 *  * Created by hannah on 12/18/2020.
 * This is created without a command
 * We only created this file in config folder
 * For reference:
 * https://stackoverflow.com/questions/42155536/what-is-the-best-practice-for-adding-constants-in-laravel-long-list#
 * Run this command after:
 * php artisan config:cache
 */

return [

    /*
    |--------------------------------------------------------------------------
    | constants being used in the app
    |--------------------------------------------------------------------------
    |
    |
    */

    'status' => [
        'E' => 'Enabled',
        'D' => 'Disabled',
    ],

    'order' => [
        'status' => [
            'N' => 'None',
            'R' => 'Ready to Ship',
            'S' => 'Shipped',
            'D' => 'Delivered',
        ]
    ],

    'activities' => [
        'LOGIN' => 'Login',
        'LOGOUT' => 'Logout',
        'CREATED_SUPPLIER' => 'Created supplier',
        'UPDATED_SUPPLIER' => 'Updated supplier',
        'DELETED_SUPPLIER' => 'Deleted supplier',
        'UPDATED_USER' => 'Updated user',
        'REGISTERED_USER' => 'Registered user',
        'CREATED_ORDER' => 'Created order',
        'UPDATED_ORDER' => 'Updated order',
        'DELETED_ORDER' => 'Deleted order',
    ],

    'supplier_type' =>[
        'O' => 'Online Store',
        'P' => 'Physical Store',
    ]
];
