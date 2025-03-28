<?php

namespace HelloModular;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use HelloModular\Console\Commands\HelloCommand;

class HelloModularServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'hellomodular');
        $this->mergeConfigFrom(__DIR__.'/../config/hellomodular.php', 'hellomodular');
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');

        $this->publishes([
            __DIR__.'/../config/hellomodular.php' => config_path('hellomodular.php'),
        ], 'hellomodular-config');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/hellomodular'),
        ], 'hellomodular-views');

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/hellomodular'),
        ], 'public');

        if ($this->app->runningInConsole()) {
            $this->commands([
                HelloCommand::class,
            ]);
        }
    }

    public function register()
    {
        //
    }
}
