<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class pagesRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'menu_head' => 'required',
			'name' => 'required|unique:pages,name'
		];
	}

	public function attributes()
	{
		return [
			'menu_head' => 'menu name'
		];
	}

}
