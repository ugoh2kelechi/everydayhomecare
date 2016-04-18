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
		//->value('name');
		//$services = $serv->name;
    	return view('pages.home',['title'=>'Home']);
	
	}

	public function about()
	{
    		return view('pages.about',['title'=>'About us']);
	}

	public function contact()
	{
    		return view('pages.contact',['title'=>'Contact']);
	}

	public function services()
	{
    		return view('pages.services',['title'=>'Services']);
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

		if($pagename === 'frequently.questions')
		{
			return view('pages.faq',['title'=>'Frequently asked questions']);

		}elseif ($pagename === 'testimonies') 
		{
			return view('pages.testimony',['title'=>'Testimony']);

		}elseif ($pagename === 'site.map') 
		{
			return view('pages.sitemap',['title'=>'Site map']);
		}else
		{
			$string = str_replace(".", " ", $pagename);

			$pgdetail = DB::table('pages')
										->join('page_content','pages.id','=','page_content.page_id')
										->where('pages.slug_name',$pagename)->get();

			//->join('page_media','pages.id','=','page_media.content_id')

			$valueid = "";

			foreach ($pgdetail as $pgdetails) {

				$valueid = $pgdetails->page_id;
			}

			$images = DB::table('page_media')->where('content_id','=',$valueid)->get();

			


			return view('pages.page',['title'=>$string, 'pgdata'=>$pgdetail, 'images'=>$images]);
			//return view('pages.page',['status'=>'Working', 'title'=>$string, 'pgdata'=>$pgdetail]);
			//tent = $pgdetail->paged;
		}


		
		//
		
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

			return view('pages.admin_home',
				['title'=>'Admin','user'=>$user,'pages'=>$pgnames,'content'=>$content]);
		}
		else
		{

			return view('auth.login');
			//return response()->json(['message'=> 'you are not logged in','error code'=>404], 404);
		}
	}

}
