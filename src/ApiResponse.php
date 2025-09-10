<?php

namespace Soft\ApiResponse;

use Illuminate\Support\Facades\Response;

abstract class ApiResponse
{
    protected bool $success = true;
    protected int $statusCode = 200;
    protected ?string $message = null;
    protected array $errors = [];

    public function statusCode($statusCode): self
    {
        $this->statusCode = $statusCode;
        return $this;
    }
    public function errors($errors): self
    {
        $this->errors = $errors;
        return $this;
    }
    public function message($message): self
    {
        $this->message = $message;
        return $this;
    }
    public function success($success): self
    {
        $this->success = $success;
        return $this;
    }
    abstract public function toArray(): array;

    public function toJson()
    {
        return response()->json($this->toArray(), $this->statusCode);
    }
}
