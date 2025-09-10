<?php

namespace Soft\ApiResponse\Responses;

use Soft\ApiResponse\ApiResponse;


class ValidationErrorResponse extends ApiResponse
{
    public function __construct()
    {
        $this->success = false;
    }
    public function toArray(): array
    {
        return array_filter(
            [
                'success' => $this->success,
                'message' => $this->message,
                'errors' => $this->errors,
            ],
            fn($v) => $v !== null && $v !== []
        );
    }
}
