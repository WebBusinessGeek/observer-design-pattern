<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 10/30/14
 * Time: 8:11 PM
 */

namespace App;


class TemperatureOnlyDisplay implements ObserverInterface {

    public $temperature;

    public function __construct()
    {
        $this->temperature = 'No data yet';
    }

    public function update($temp, $humidity, $chanceOfRain)
    {
        $this->temperature = $temp;

        return 'updated';
    }

    public function display()
    {
        return $this->displayTemp();
    }

    public function displayTemp()
    {
        $title = "<h2>Current Temperature</h2>";

        $template = "<b>". $this->temperature. "</b>";

        $glyph = ' degrees';
        return $title . $template . $glyph;
    }
}