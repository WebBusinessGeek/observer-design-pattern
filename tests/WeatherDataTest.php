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

    public function testSetTemp()
    {
        $temp = 80;
        $weatherData = new WeatherData($temp);

//        $this->assert

    }

}
