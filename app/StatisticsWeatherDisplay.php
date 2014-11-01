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
        $title = "<h2>Today's Weather Statistics</h2>";

        return $title . $this->displayTemp() . "<br/>" . $this->displayHumidity();

    }

    public function displayTemp()
    {
        $title = "<h5>Temperature</h5>";
        //show the highest temperature
        $high = "<b>High: </b>".$this->highTemp(). " degrees";
        //show the lowest temperature
        $low = "<b>Low: </b>". $this->lowTemp(). " degrees";
        //show the average temperature
        $average = "<b>Average: </b>". $this->averageTemp(). " degrees";

        return $title . $high . $low . $average;
    }

    public function displayHumidity()
    {
        $title = "<h5>Humidity</h5>";
        //show the highest temperature
        $high = "<b>High: </b>".$this->highHumidity(). " % ";
        //show the lowest temperature
        $low = "<b>Low: </b>". $this->lowHumidity(). " % ";
        //show the average temperature
        $average = "<b>Average: </b>". $this->averageHumidity(). " % ";

        return $title . $high . $low . $average;
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