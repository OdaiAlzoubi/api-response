<?php

namespace Soft\ApiResponse\Responses;

use Soft\ApiResponse\ApiResponse;


class SuccessResponse extends ApiResponse
{
    protected mixed $data = null;

    public function __construct()
    {
        $this->success = true;
    }
    public function data($data): self
    {
        $this->data = $data;
        return $this;
    }
    public function toArray(): array
    {
        return array_filter(
            [
                'success' => $this->success,
                'message' => $this->message,
                'data' => $this->data,
            ],
            fn($v) => $v !== null && $v !== []
        );
    }
}
