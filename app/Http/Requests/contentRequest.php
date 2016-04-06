<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class contentRequest extends Request {

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
			'pagenames' => 'required',
			'pg_title' => 'required',
			'pg_description' => 'required',
			'pg_content' => 'required'
		];
	}

	public function attributes(){
		return[
			'pagenames' => 'page name',
			'pg_title' => 'page title',
			'pg_description' => 'page brief description',
			'pg_content' => 'page content'
		];
	}

}
