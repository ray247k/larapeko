<?php

namespace Ray247k\LaraPeko;

use Illuminate\Support\ServiceProvider;

class LaraPekoServiceProvider extends ServiceProvider
{
    public function boot()
    {
       $source = realpath($raw = __DIR__.'/../config/lara_peko.php') ?: $raw;
       $this->publishes([
           $source => config_path('lara_peko.php'),
       ]);
    }

    // 註冊套件函式
    public function register()
    {
        $configPath = __DIR__ . '/../config/lara_peko.php';
        $this->mergeConfigFrom($configPath, 'lara_peko');

        $this->app->singleton('LaraPeko', function ($app) {
            return new LaraPeko();
        });
    }
}
