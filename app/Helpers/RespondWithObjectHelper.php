<?php

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;

if (!function_exists('respondWithObject')) {

    /**
     * respond helper used for returning a json message with object
     *
     * @param string $message
     * @param $data
     * @param int $status
     * @return JsonResponse
     */
    function respondWithObject(string $message, object $data, int $status=200) : JsonResponse
    {
        return response()->json(['message' => $message, 'data' => $data], $status);
    }
}
