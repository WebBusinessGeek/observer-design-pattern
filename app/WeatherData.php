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
    public $observers = [];

    public $temperature;

    public $humidity;

    public $chanceOfRain;


    public function __construct()
    {
//        $this->setTemp($temp);

//        $this0>setHumidity($humidity);
//
//        $this0>setChance($chanceOfRain);


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

    }

    /**
     * add an observer to the observer array
     */
    public function registerObserver(ObserverInterface $observer)
    {


    }

    /**
     * remove an observer from the observer array
     */
    public function removeObserver(ObserverInterface $observer)
    {

    }

    /**
     * notify all observers
     */
    public function notifyObservers()
    {

    }


}