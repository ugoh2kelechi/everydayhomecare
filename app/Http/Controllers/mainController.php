<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Auth;

use App\Model\PageModel;
use App\Model\ContentModel;

use DB;

class mainController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$services = DB::table('pages')->select('id','name')->where('menu_name','SERVICES')->get(); 
		$caregivers = DB::table('pages')->select('id','name')->where('menu_name','CAREGIVERS')->get();
		$news = DB::table('pages')->select('id','name')->where('menu_name','NEWS/VIDEOS')->get();
		$resources = DB::table('pages')->select('id','name')->where('menu_name','RESOURCES')->get();
		$generals = DB::table('pages')->select('id','name')->where('menu_name','General Services')->get();
		$quicks = DB::table('pages')->select('id','name')->where('menu_name','Quick links')->get();

		//->value('name');
		//$services = $serv->name;
    	return view('pages.home',['title'=>'Everyday Home Care || Home',
    		'services'=> $services,
    		'caregivers'=> $caregivers,
    		'news'=> $news,
    		'resources'=> $resources,
    		'generals'=> $generals,
    		'quicks'=> $quicks
    		]);
	
	}

	public function about()
	{
    		return view('pages.about',['title'=>'About us']);
	
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($pagename)
	{

		$string = str_replace(".", " ", $pagename);
		return response()->json(['status'=>'Working now', 'data'=>$string]);
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function admin()
	{
		if (Auth::check()) 
		{
			$pgnames = ['' => 'Select'] + PageModel::lists('name', 'id');
			$content = [''=>'Select']+ ContentModel::lists('title','pc_id');

			//$pgname = $pages->get('name');
			$user = Auth::user();

			return view('pages.admin_home',['title'=>'Admin || EveryDay Home Care','user'=>$user,'pages'=>$pgnames,'content'=>$content]);
		}
		else
		{
			
			return view('auth.login');
			//return response()->json(['message'=> 'you are not logged in','error code'=>404], 404);
		}
	}

}
