<?php

/**
 * @Author TungND
 * @Date   Sep 07, 2022
 */

namespace Laravel\NganLuong;

use Illuminate\Support\ServiceProvider;
use Laravel\NganLuong\Services\NLClient;

class NLServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Publish config files
        $this->publishes([
                             __DIR__ . '/../config/config.php' => config_path('config.php'),
                         ], 'laravel_nl');
        // Publish Lang Files
        $this->loadTranslationsFrom(__DIR__ . '/../lang', 'laravel_nl');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerNL();
        $this->configPath();
    }

    /**
     * Register the application bindings.
     *
     * @return void
     */
    private function registerNL()
    {
        $this->app->singleton('client_nl', static function () {
            return new NLClient();
        });
    }

    /**
     *  Merges user's and nganluong configs.
     *
     * @return void
     */
    private function configPath()
    {
        $configPath = __DIR__ . '/../config/config.php';
        $this->mergeConfigFrom($configPath, 'laravel-nl');
    }

}
