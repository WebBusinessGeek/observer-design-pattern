<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 10/29/14
 * Time: 8:23 PM
 */

namespace App;


interface ObservableInterface {

    public function registerObserver(ObserverInterface $observer);

    public function removeObserver(ObserverInterface $observer);

    public  function notifyObservers();

}