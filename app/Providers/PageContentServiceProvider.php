<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use View;
use DB;

use Illuminate\Http\Request;

use URL;

class PageContentServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		View::composer('pages.page',function($view){

			$fullurl = URL::current();
    		$domain = url().'/page/';
    		$pagen = str_replace($domain,"", $fullurl);

			$view->with(['adverts'=> DB::table('adverts')->get(),
    		'img_header'=> DB::table('pages')->where('slug_name','=',$pagen)->get(),
    		'generals'=> DB::table('pages')->orderByRaw('rand()')->take(6)->get()]);	
		});


		View::composer('pages.sitemap',function($view){

			$fullurl = URL::current();
    		$domain = url().'/page/';
    		$pagen = str_replace($domain,"", $fullurl);

			$view->with(['adverts'=> DB::table('adverts')->get(),
    		'img_header'=> DB::table('pages')->where('slug_name','=',$pagen)->get(),
    		'generals'=> DB::table('pages')->orderByRaw('rand()')->take(6)->get()]);	
		});

		View::composer('pages.testimony',function($view){

			$fullurl = URL::current();
    		$domain = url().'/page/';
    		$pagen = str_replace($domain,"", $fullurl);

			$view->with(['adverts'=> DB::table('adverts')->get(),
    		'img_header'=> DB::table('pages')->where('slug_name','=',$pagen)->get(),
    		'generals'=> DB::table('pages')->orderByRaw('rand()')->take(6)->get()]);	
		});

		View::composer('pages.faq',function($view){

			$fullurl = URL::current();
    		$domain = url().'/page/';
    		$pagen = str_replace($domain,"", $fullurl);

			$view->with(['adverts'=> DB::table('adverts')->get(),
    		'img_header'=> DB::table('pages')->where('slug_name','=',$pagen)->get(),
    		'generals'=> DB::table('pages')->orderByRaw('rand()')->take(6)->get()]);	
		});
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
