<?php

use Illuminate\Support\ServiceProvider;

class DemoPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }
}
