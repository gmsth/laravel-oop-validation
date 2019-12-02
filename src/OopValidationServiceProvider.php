<?php

namespace rules;

use Illuminate\Support\ServiceProvider;

class OopsValidatorServiceProvider extends ServiceProvider
{
    public function boot()
    {     
    }

    public function register()
    {
        dd($this->app);
        $this->app['rule'] = $this->app->share(function($app) {
            return new Rule;
        });
    }
}
