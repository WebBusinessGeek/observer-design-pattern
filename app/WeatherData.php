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
        $this->humidity = $this->checkTheValue($humidity);

    }

    public function checkTheValue($integer)
    {
        if(!is_int($integer) || $integer <= 0 || $integer > 100)
        {
            throw new Exception('Invalid Argument:'.$integer);

        }

        return $integer;
    }

    public function getObserverPlace(ObserverInterface $observer)
    {
        return array_search($observer, $this->observers);


    }

    public function setChanceOfRain($chanceOfRain)
    {
        $this->chanceOfRain = $this->checkTheValue($chanceOfRain);

    }



    public function registerObserver(ObserverInterface $observer)
    {
        $this->observers[] = $observer;

        return $this;

    }


    public function removeObserver(ObserverInterface $observer)
    {
        unset($this->observers[$this->getObserverPlace($observer)]);

        return $this->observers;

    }

    public function changed($temp, $humidity, $chanceOfRain)
    {
        $this->setTemp($temp);

        $this->setHumidity($humidity);

        $this->setChanceOfRain($chanceOfRain);

        return $this->notifyObservers();
    }

    public function notifyObservers()
    {
        foreach($this->observers as $observer)
        {
            $observer->update($this->temperature, $this->humidity, $this->chanceOfRain);

        }
        return 'observers notified';
    }



}