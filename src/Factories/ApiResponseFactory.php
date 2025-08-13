<?php

namespace Soft\ApiResponse\Factories;

use Soft\ApiResponse\Responses\ErrorResponse;
use Soft\ApiResponse\Responses\SuccessResponse;
use Soft\ApiResponse\Responses\ValidationErrorResponse;

class ApiResponseFactory
{
    public static function success()
    {
        return new SuccessResponse();
    }
    public static function error()
    {
        return new ErrorResponse();
    }
    public static function validationError()
    {
        return new ValidationErrorResponse();
    }
}

