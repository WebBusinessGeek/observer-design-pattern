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
		$c2 = new StatisticsWeatherDisplay();
		$c3 = new CurrentWeatherDisplay();
		$c4 = new TemperatureOnlyDisplay();
		$w->registerObserver($c)->registerObserver($c2)->registerObserver($c3)->registerObserver($c4);
		$w->removeObserver($c4);
		var_dump($w->observers);

	}

}
