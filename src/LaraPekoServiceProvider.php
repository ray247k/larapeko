<?php

namespace Ray247k\LaraPeko;

use Illuminate\Support\ServiceProvider;

class LaraPekoServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->configPublish();
    }

    public function configPublish()
    {
        $this->publishes([
            __DIR__ . '/../config/lara_peko.php' => config_path('lara_peko.php')
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
