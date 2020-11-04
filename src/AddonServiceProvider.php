<?php

namespace :uc:vendor\:uc:package;

use Illuminate\Support\ServiceProvider;

class AddonServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // TODO: if lang folder exists and is not empty
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', ':lc:vendor');
        
        // TODO: if views folder exists and is not empty
        $this->loadViewsFrom(__DIR__.'/../resources/views', ':lc:vendor');

        // TODO: if migrations folder exists and is not empty
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        
        // TODO: if routes folder exists and is not empty
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        // TODO: if config folder exists and is not empty
        // $this->mergeConfigFrom(__DIR__.'/../config/:lc:package.php', ':lc:package');
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // TODO: if config folder exists and is not empty
        // Publishing the configuration file.
        // $this->publishes([
        //     __DIR__.'/../config/:lc:package.php' => config_path(':lc:package.php'),
        // ], 'config');

        // TODO: if views folder exists and is not empty
        // Publishing the views.
        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/:lc:vendor'),
        ], 'views');

        // TODO: if assets folder exists and is not empty
        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/:lc:vendor'),
        ], 'assets');*/

        // TODO: if lang folder exists and is not empty
        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/:lc:vendor'),
        ], 'lang');*/

        // TODO: if commands array exists and is not empty
        // Registering package commands.
        // $this->commands([]);
    }
}
