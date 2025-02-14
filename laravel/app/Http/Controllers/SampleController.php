<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\JsonResponse;

class SampleController extends BaseController
{
    public function post(): JsonResponse
    {
        return response()->json(['message' => 'ハロー']);
    }
}