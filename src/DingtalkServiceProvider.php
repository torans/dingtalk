<?php

/*
 * This file is part of the mingyoung/dingtalk.
 *
 * (c) 张铭阳 <mingyoungcheung@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyDingTalk;

use Illuminate\Support\ServiceProvider;

class DingtalkServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/dingtalk.php', 'dingtalk'
        );
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/dingtalk.php' => config_path('dingtalk.php'),
        ], 'Dingtalk');
    }
}
