<?php

namespace Soft\ApiResponse\Responses;

use Soft\ApiResponse\ApiResponse;


class ErrorResponse extends ApiResponse
{
    protected string $errors = '';

    public function __construct()
    {
        $this->success = false;
    }
    public function errors($errors): self
    {
        $this->errors = $errors;
        return $this;
    }

    public function toJson()
    {
        $response = [
            'success' => $this->success,
            'errors' => $this->errors
        ];
        if ($this->message)
            $response['message'] = $this->message;
        return response()->json($response, $this->responseStatus)->setStatusCode($this->code);
    }
}
