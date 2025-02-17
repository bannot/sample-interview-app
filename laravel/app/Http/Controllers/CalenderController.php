<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Services\CalenderService;

class CalenderController extends BaseController
{
    protected $calendar;

    public function __construct(
        CalenderService $calendar,
        )
    {
        $this->calendar = $calendar;
    }

    public function post(Request $request): JsonResponse
    {
        $month = $request->input('month');
        $nihonCalendar =$this->calendar->getNihonCalendarData($month);
        $englishCalendar = 

        return response()->json(['message' => 'ハロー']);
    }
}
