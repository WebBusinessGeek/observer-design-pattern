<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 10/30/14
 * Time: 8:38 PM
 */

namespace Tests;


use App\WeatherData;

class WeatherDataTest extends \PHPUnit_Framework_TestCase {


    public function testConstructOK()
    {
        $w = new WeatherData(11, 10, 10);

        $this->assertEquals(10, $w->chanceOfRain);
        $this->assertEquals(11, $w->temperature);
        $this->assertEquals(10, $w->humidity);

    }



}
