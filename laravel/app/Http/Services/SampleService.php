<?php

namespace App\Services;

use Exception;
use App\Repositories\SampleRepository;

/**
 * Class SampleService
 * @package App\Services
 */
class SampleService
{
    public function __construct(
        SampleRepository $sampleRepository
    ) {
        $this->sampleRepository = $sampleRepository;
    }

    public function getNihonCalendar($month)
    {
        $nihonCalendar = $this->sampleRepository->getNihonCalendar($month);
        return $nihonCalendar;
    }
}