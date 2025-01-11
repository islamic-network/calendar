<?php
namespace IslamicNetwork\Calendar\Tests\Unit;

use IslamicNetwork\Calendar\Helpers\Calendar;
use PHPUnit\Framework\TestCase;

class HolidaysTest extends TestCase
{

    public function testAHoliday()
    {
        $this->assertEquals('Ashura', Calendar::getHijriHolidays(10, 1)[0]);
        $this->assertEquals('Ashura', Calendar::getHijriHolidays('10', 1)[0]);
    }

    public function testHolidays()
    {
        $time_start = microtime(true);
        $this->assertCount(2, Calendar::getHijriHolidays(15, 7));
        $this->assertIsString(Calendar::getHijriHolidays(15, 7)[0]);
        $this->assertIsString(Calendar::getHijriHolidays(15, 7)[1]);
        $time_end = microtime(true);
        $timeNew = $time_end - $time_start;
        echo "\n<pre> New Execution time :  $timeNew seconds</pre>";

        $time_start = microtime(true);
        $this->assertCount(2, Calendar::getHijriHolidaysDeprected(15, 7));
        $this->assertIsString(Calendar::getHijriHolidaysDeprected(15, 7)[0]);
        $this->assertIsString(Calendar::getHijriHolidaysDeprected(15, 7)[1]);
        $time_end = microtime(true);
        $timeOld = $time_end - $time_start;
        echo "\n<pre> Deprecated Execution time : $timeOld seconds</pre>";

        $diff = $timeNew - $timeOld;

        echo "\n<pre> Diff $diff seconds</pre>";
        
        

    }

}