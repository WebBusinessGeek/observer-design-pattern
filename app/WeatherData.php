<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 10/29/14
 * Time: 8:24 PM
 */

namespace App;


use SebastianBergmann\Exporter\Exception;

class WeatherData implements ObservableInterface {

    //contains the observers
    public $observers;

    public $temperature;

    protected $humidity;

    protected $chanceOfRain;


    public function __construct($temp, $humidity, $chanceOfRain)
    {
        $this->setTemp($temp);

        $this->setHumidity($humidity);

        $this->setChanceOfRain($chanceOfRain);

        $this->observers = [];


    }

    public function setTemp($temp)
    {
       $this->temperature =  $this->checkTemp($temp);

    }

    public function checkTemp($temp)
    {
        if(!is_int($temp) || $temp <= 10)
        {
          throw new Exception('Invalid Temperature: '.$temp);
        }

        return $temp;
    }

    public function setHumidity($humidity)
    {
        $this->humidity = $this->checkForValue($humidity);

    }

    public function checkForValue($integer)
    {
        if(!is_int($integer) || $integer <= 0 || $integer > 100)
        {
            throw new Exception('Invalid Argument:'.$integer);

        }

        return $integer;
    }

    public function setChanceOfRain($chanceOfRain)
    {
        $this->chanceOfRain = $this->checkForValue($chanceOfRain);

    }



    /**
     * add an observer to the observer array
     */
    public function registerObserver(ObserverInterface $observer)
    {
        array_push($this->observers, $observer);

        return $this;

    }

    /**
     * remove an observer from the observer array
     */
    public function removeObserver(ObserverInterface $observer)
    {
        //this doesnt work yet!!!
       if($key = array_search($observer, $this->observers) !== false)
       {
           unset($this->observers[$key]);
       }


    }

    /**
     * notify all observers
     */
    public function notifyObservers()
    {

    }


}