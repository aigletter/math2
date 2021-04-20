<?php


namespace itea\learning\math;

use Illuminate\Support\ServiceProvider;

class MathServiceProvider extends ServiceProvider
{
    public function register() {
        $this->app->bind(Math::class, function ($app) {
            return new Math('aaa');
        });
    }
}
