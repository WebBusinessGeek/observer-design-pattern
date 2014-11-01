<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 10/30/14
 * Time: 8:10 PM
 */

namespace App;


class StatisticsWeatherDisplay implements ObserverInterface {

    public $temperatures;

    public $humidities;

    public function __construct()
    {
        $this->temperatures = [];

        $this->humidities = [];
    }

    public function update($temp, $humidity, $chanceOfRain)
    {
        $this->temperatures[] = $temp;

        $this->humidities[] = $humidity;
    }

    public function display()
    {
        //show a title 'Statistics'

        //return displayTemp() & displayHumidity()

    }

    public function displayTemp()
    {
        //show the highest temperature

        //show the lowest temperature

        //show the average temperature
    }

    public function displayHumidity()
    {
        //show the highest humidity

        //show the lowest humidity

        //show the average humidity
    }

    public function allTemp()
    {
        foreach($this->temperatures as $temp)
        {
            echo $temp. "<br/>";
        }
    }

    public function lowTemp()
    {
        return min($this->temperatures);
    }

    public function highTemp()
    {
       return max($this->temperatures);
    }

    public function averageTemp()
    {

        $total = array_sum($this->temperatures);

        $length = count($this->temperatures);

        return $total / $length;

    }

   public function allHumidities()
   {
        foreach($this->humidities as $humidity)
        {
            echo $humidity. "<br/>";
        }
   }

    public function lowHumidity()
    {
        return min($this->humidities);
    }

    public function highHumidity()
    {
        return max($this->humidities);
    }

    public function averageHumidity()
    {

        $total = array_sum($this->humidities);

        $length = count($this->humidities);

        return $total / $length;

    }


}