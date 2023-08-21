<?php

namespace Tousanco\LaravelZaya;

use Illuminate\Support\ServiceProvider;
use Tousanco\PhpZaya\Account;
use Tousanco\PhpZaya\Domain;
use Tousanco\PhpZaya\Link;
use Tousanco\PhpZaya\Space;
use Tousanco\PhpZaya\Stats;

class LaravelZayaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('zaya.php'),
            ], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'zaya');

        $this->app->singleton('zayaLink', function ($app) {
            return Link::instance(config('zaya.api_key'), config('zaya.base_url'));
        });

        $this->app->singleton('zayaSpace', function () {
            return Space::instance(config('zaya.api_key'), config('zaya.base_url'));
        });

        $this->app->singleton('zayaDomain', function () {
            return Domain::instance(config('zaya.api_key'), config('zaya.base_url'));
        });

        $this->app->singleton('zayaStats', function () {
            return Stats::instance(config('zaya.api_key'), config('zaya.base_url'));
        });

        $this->app->singleton('zayaAccount', function () {
            return Account::instance(config('zaya.api_key'), config('zaya.base_url'));
        });
    }
}