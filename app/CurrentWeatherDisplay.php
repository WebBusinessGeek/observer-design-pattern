<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 10/30/14
 * Time: 8:10 PM
 */

namespace App;


class CurrentWeatherDisplay implements ObserverInterface{

    public $temperature;

    public $humidity;

    public $chanceOfRain;


    public function __construct()
    {
        $this->temperature = 'No data yet';

        $this->humidity = 'No data yet';

        $this->chanceOfRain = 'No data yet';
    }

    public function update($temp, $humidity, $chanceOfRain)
    {
        $this->temperature = $temp;

        $this->humidity = $humidity;

        $this->chanceOfRain = $chanceOfRain;

        return 'updated';
    }

    public function display()
    {
        $temp = $this->displayTemp();

        $humidity = $this->displayHumidity();

        $chanceOfRain = $this->displayChanceOfRain();

        return $temp . "<br/>" . $humidity . "<br/>" . $chanceOfRain;

    }

    public function displayTemp()
    {
        $template = "<b>Current Temperature:</b> ". $this->temperature. ' Degrees';
        return $template;
    }

    public function displayHumidity()
    {
        $template = "<b>Current Humidity: </b>". $this->humidity. '%';
        return $template;
    }

    public function displayChanceOfRain()
    {
        $template = "<b>Chance of Rain: </b>". $this->chanceOfRain. '%';
        return $template;
    }

}