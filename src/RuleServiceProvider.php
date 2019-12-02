<?php

namespace Gmsth\Rules;

use Illuminate\Support\ServiceProvider;

class RuleServiceProvider extends ServiceProvider
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
