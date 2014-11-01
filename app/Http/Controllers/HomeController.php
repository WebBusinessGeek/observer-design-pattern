<?php namespace App\Http\Controllers;

use App\CurrentWeatherDisplay;
use App\StatisticsWeatherDisplay;
use App\TemperatureOnlyDisplay;
use App\WeatherData;
use Illuminate\Routing\Controller;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| Controller methods are called when a request enters the application
	| with their assigned URI. The URI a method responds to may be set
	| via simple annotations. Here is an example to get you started!
	|
	*/

	/**
	 * @Get("/")
	 */
	public function index()
	{
		$w = new WeatherData(50, 50, 50);
		$c = new CurrentWeatherDisplay();
		$c2 = new TemperatureOnlyDisplay();
		$c3 = new StatisticsWeatherDisplay();
		$w->registerObserver($c)->registerObserver($c2)->registerObserver($c3);
		$w->changed(90,22,67);
		$w->changed(93,44,45);
		//return $c3->allTemp().$c3->highTemp().$c3->lowTemp().$c3->averageTemp();
		return $c->display().$c2->display().$c3->display();


	}

}
