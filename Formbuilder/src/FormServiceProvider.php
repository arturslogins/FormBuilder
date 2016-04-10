<?php

namespace Formbuilder;

use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('formbuilder', function ($app) {
            return new Builder;
        });
    }

    public function boot()
    {
        //loading the routes file
        require __DIR__ .'/Http/routes.php';

        //define the path for the view filesize
        $this->loadViewsFrom(__DIR__ . '../views', 'formbuilder');

        //define the files which are going to be published
        $this->publishes([
            __DIR__. '/migrations/2016_04_9_000000_create_formbuilder_table.php' => base_path('database/migrations/2016_04_9_000000_create_formbuilder_table.php'),
        ]);
    }
}
