<?php

namespace App\Repositories;

/**
 * Class CalenderRepository
 * @package App\Repositories
 */
class CalenderRepository {
    // 仮定としてDB層にアクセスするためのリポジトリ層
    public function getNihonCalendarData($month)
    {
        $nihonCalendarData = [
            1 => '1月',
            2 => '2月',
            3 => '3月',
            4 => '4月',
            5 => '5月',
            6 => '6月',
            7 => '7月',
            8 => '8月',
            9 => '9月',
            10 => '10月',
            11 => '11月',
            12 => '12月'
        ];
    
        return $nihonCalendarData[$nihonCalendarData] ?? '無効な月';
    }
}