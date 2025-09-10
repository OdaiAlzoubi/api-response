<?php

namespace Soft\ApiResponse;

use Illuminate\Support\Facades\Facade;

class ApiResponseFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'apiresponse';
    }
}
