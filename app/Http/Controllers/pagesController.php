<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests\pagesRequest;

use App\Model\PageModel;

use Auth;

class pagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
	public function store(pagesRequest $request)
	{

		if(Auth::check())
		{
			$named = $request->get('name');
			$menu_named = $request->get('menu_head');
			$userid = Auth::user()->id;
			PageModel::create(['name'=>$named, 'menu_name'=>$menu_named, 'user_id'=>$userid]);

			return back()->with(['message'=>'The page name was saved successfully.']);
			//return response()->json(['status'=>'Good and working', 'name'=>$named, 'menu'=>$menu_named, 'id'=> $userid]);
			//send email here
		}
		else
		{
			// go back home
				return view('auth.login');
		}
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
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

}
