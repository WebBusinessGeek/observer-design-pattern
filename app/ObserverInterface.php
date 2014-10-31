<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 10/30/14
 * Time: 8:09 PM
 */

namespace App;


interface ObserverInterface {

    public function update($temp, $humidity, $chanceOfRain);

    public function display();

}