<?php
namespace Codesmith445\Qoute;

 use Illuminate\Support\ServiceProvider;

 class QouteServiceProvider extends ServiceProvider
 {
    public function register()
    {
        $this->app->singleton('qoute', function() {
            return new Qoute();
        });
    }

    public function boot()
    {

    }
 }