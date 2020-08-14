<?php
namespace Lazada\config;
/*
 * This file is part of Laravel JINGDONG Jos Client.
 *
 * (c) oyleanu <oyleanu@163.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
return [

    'default' => 'app',

    'connections' => [
        'app' => [
            'app_key'    => env('LAZADA_APP_KEY', 'APP KEY'),
            'app_secret' => env('LAZADA_APP_SECRET', 'APP SECRET'),
            'log_path'   => env('LAZADA_LOG_PAHT', '/tmp'),
        ]
    ]
];