<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 10/30/14
 * Time: 8:10 PM
 */

namespace App;


class StatisticsWeatherDisplay implements ObserverInterface {

    public function update($temp, $humidity, $chanceOfRain)
    {
        return 'hello from stats';
    }

    public function display()
    {

    }


}