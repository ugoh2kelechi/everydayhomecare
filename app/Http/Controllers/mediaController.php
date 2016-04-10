<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests\mediaRequest;

use App\Model\MediaModel;

use Auth;





class mediaController extends Controller {

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
	public function store(mediaRequest $request)
	{

		if(Auth::check())
		{
			$contentid = $request->get('pagenames');
			$media_desc = $request->get('media_desc');
			$media_type = $request->get('media_type');

			$mediaName = $request->file('media')->getClientOriginalName();
			$res = $request->file('media')->move(base_path().'/public/images/contents/',$mediaName);
			
			if($res)
			{
				
				$userid = Auth::user()->id;
				
				MediaModel::create(['media'=>$mediaName, 'media_describe'=> $media_desc, 'media_type'=> $media_type, 'user_id'=>$userid, 'content_id'=>$contentid]);

				return back()->with(['message'=>'File was uploaded successfully']);

			}
			else
			{
				return back()->withErrors('Error uploading file, please try again.');
			}

			


			//$userid = Auth::user()->id;

			//MediaModel::create([''])

			//return response()->json(['message'=>'Welcome']);
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
