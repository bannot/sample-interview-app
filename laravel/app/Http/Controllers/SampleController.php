<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Services\SampleService;

class SampleController extends BaseController
{
    protected $sample;

    public function __construct(
        SampleService $sample,
        )
    {
        $this->sample = $sample;
    }

    public function post(Request $request): JsonResponse
    {
        $month = $request->input('month');

        return response()->json(['message' => 'ハロー']);
    }
}
