<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests\contentRequest;

use App\Model\PageModel;
use App\Model\ContentModel;
use Auth;

class contentController extends Controller {

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
	public function store(contentRequest $request)
	{
		
		if(Auth::check()){

			$pagenames = $request->get('pagenames');
			$pg_id = $pagenames + 1;
			$pg_title = $request->get('pg_title');
			$pg_description = $request->get('pg_description');
			$pg_content = $request->get('pg_content');
			$userid = Auth::user()->id;

			ContentModel::create(['title'=>$pg_title, 'description'=>$pg_description, 'contents'=>$pg_content, 'user_id'=>$userid, 'page_id' => $pg_id]);

			return back()->with(['message' => 'The page contents where saved successfully']);
				//send email later.

		}
		else
		{
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
