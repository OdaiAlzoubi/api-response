<?php

namespace Soft\ApiResponse\Responses;

use Soft\ApiResponse\ApiResponse;


class ValidationErrorResponse extends ApiResponse
{
    protected ?string $message = 'Validation Error';
    protected ?array $errors = null;

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
            'message' => $this->message,
            'errors' => $this->errors
        ];
        return response()->json($response, $this->responseStatus)->setStatusCode($this->code);
    }
}
