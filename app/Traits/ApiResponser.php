<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponser
{
    public function success(string $message = "", mixed $data = [], int $status = 200): JsonResponse
    {
        return response()->json(
            [
                'success' => true,
                'message' => $message,
                'data' => $data,
            ],
            $status
        );
    }


    public function error(string $message = "", mixed $data = [], int $status = 400): JsonResponse
    {
        return response()->json(
            [
                'success' => false,
                'message' => $message,
                'data' => $data,
            ],
            $status
        );
    }
}
