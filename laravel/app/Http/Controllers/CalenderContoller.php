<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\JsonResponse;
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
    public function put($month): JsonResponse
    {
        $nihonCalendar =$this->calendar->getNihonCalendarData($month);
        $englishCalendar = $this->getEnglishCalendarMonth($month);
        return response()->json([
            'calender' => [
                'nihon' => $nihonCalendar,
                'english' => $englishCalendar
            ]
        ]);
    }
    public function getEnglishCalendarMonth(int $month): string
    {
        $englishCalendarData = [
            1 => 'January',
            2 => 'February',
            3 => 'March',
            4 => 'April',
            5 => 'May',
            6 => 'June',
            7 => 'July',
            8 => 'August',
            9 => 'September',
            10 => 'October',
            11 => 'November',
            12 => 'December'
        ];
        return $englishCalendarData[$month];
    }
}