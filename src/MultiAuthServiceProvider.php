<?php

namespace AlAminFirdows\MultiAuth;

use Illuminate\Support\ServiceProvider;

class MultiAuthServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerInstallCommand();
        $this->registerAuthSettingsInstallCommand();
        $this->registerAuthFilesInstallCommand();
        $this->registerAuthModelInstallCommand();
        $this->registerAuthViewsInstallCommand();
        //$this->registerInstallMiddlewareCommand();
    }

    /**
     * Register the adminlte:install command.
     */
    private function registerInstallCommand()
    {
        $this->app->singleton('command.alaminfirdows.multiauth.install', function ($app) {
            return $app['AlAminFirdows\MultiAuth\Commands\MultiAuthInstallCommand'];
        });

        $this->commands('command.alaminfirdows.multiauth.install');
    }

    /**
     * Register the adminlte:install command.
     */
    private function registerAuthSettingsInstallCommand()
    {
        $this->app->singleton('command.alaminfirdows.multiauth.settings', function ($app) {
            return $app['AlAminFirdows\MultiAuth\Commands\AuthSettingsInstallCommand'];
        });

        $this->commands('command.alaminfirdows.multiauth.settings');
    }

    /**
     * Register the adminlte:install command.
     */
    private function registerAuthFilesInstallCommand()
    {
        $this->app->singleton('command.alaminfirdows.multiauth.files', function ($app) {
            return $app['AlAminFirdows\MultiAuth\Commands\AuthFilesInstallCommand'];
        });

        $this->commands('command.alaminfirdows.multiauth.files');
    }

    /**
     * Register the adminlte:install command.
     */
    private function registerAuthModelInstallCommand()
    {
        $this->app->singleton('command.alaminfirdows.multiauth.model', function ($app) {
            return $app['AlAminFirdows\MultiAuth\Commands\AuthModelInstallCommand'];
        });

        $this->commands('command.alaminfirdows.multiauth.model');
    }

    /**
     * Register the adminlte:install command.
     */
    private function registerAuthViewsInstallCommand()
    {
        $this->app->singleton('command.alaminfirdows.multiauth.views', function ($app) {
            return $app['AlAminFirdows\MultiAuth\Commands\AuthViewsInstallCommand'];
        });

        $this->commands('command.alaminfirdows.multiauth.views');
    }
}