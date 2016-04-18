<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use DB;

use Illuminate\Http\Request;

use URL;

class HomeServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{

		View::composer('layouts.header',function($view){

		$fullurl = URL::current();
    	$domain = url().'/page/';
    	$pagen = str_replace($domain,"", $fullurl);


		$view->with(['services'=> DB::table('pages')->select('id','name')->where('menu_name','SERVICES')->get(),
    		'caregivers'=> DB::table('pages')->select('id','name')->where('menu_name','CAREGIVERS')->get(),
    		'news'=> DB::table('pages')->select('id','name')->where('menu_name','NEWS/VIDEOS')->get(),
    		'img_header'=> DB::table('pages')->where('slug_name','=',$pagen)->get(),
    		'resources'=> DB::table('pages')->select('id','name')->where('menu_name','RESOURCES')->get(),
    		'generals'=> DB::table('pages')->select('id','name')->where('menu_name','SERVICES')->take(5)->get(),
    		'abouts'=> DB::table('page_content')->select('pc_id','contents')->where('page_id',28)->get(),
    		'quicks'=> DB::table('pages')->select('id','name')->where('menu_name','Quick links')->get()]);
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
