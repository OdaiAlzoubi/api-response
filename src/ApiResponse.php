<?php

namespace Soft\ApiResponse;

abstract class ApiResponse
{
    protected bool $success = true;
    protected int $responseStatus = 200;
    protected ?string $message = null;
    protected int $code = 200;

    public function responseStatus($responseStatus): self
    {
        $this->responseStatus = $responseStatus;
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
    public function code($code): self
    {
        $this->code = $code;
        return $this;
    }
    abstract public function toJson();
}
