<?php

namespace Soft\ApiResponse;

use Illuminate\Support\ServiceProvider;
use Soft\ApiResponse\Factories\ApiResponseFactory;

class ApiResponseServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('apiresponse', function () {
            return new ApiResponseFactory();
        });
    }

    public function boot()
    {
        //
    }
}
