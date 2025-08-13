<?php

namespace Soft\ApiResponse\Responses;

use Soft\ApiResponse\ApiResponse;


class SuccessResponse extends ApiResponse
{
    protected mixed $data = null;

    public function data($data): self
    {
        $this->data = $data;
        return $this;
    }
    public function response()
    {
        return [
            'success' => $this->success,
            'data' => $this->data
        ];
    }
    public function toJson()
    {
        $response = $this->response();
        if ($this->message)
            $response['message'] = $this->message;
        return response()->json($response, $this->responseStatus)->setStatusCode($this->code);
    }
}
