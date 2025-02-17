<?php

namespace App\Services;

use Exception;
use App\Repositories\CalenderRepository;

/**
 * Class SampleService
 * @package App\Services
 */
class CalenderService
{
    protected $calenderRepository;

    public function __construct(
        CalenderRepository $calenderRepository,
        ) 
    {
        $this->calenderRepository = $calenderRepository;
    }

    public function getNihonCalendarData($month)
    {
        $nihonCalendarData = $this->calenderRepository->getNihonCalendarData($month);
        return $nihonCalendarData;
    }
}
