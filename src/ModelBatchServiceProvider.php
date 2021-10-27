<?php

namespace Chenfeizhou\ModelBatch;

use Illuminate\Support\ServiceProvider;

class ModelBatchServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__.'/../config' => config_path()], 'model-batch');
        }
    }

    public function register()
    {

    }
}
