<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class mediaRequest extends Request {

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
			'media_desc' => 'required',
			'media' => 'required',
			'media_type' => 'required'
		];
	}

	public function attributes(){
		return[
			'pagenames' => 'page name',
			'media_desc' => 'media description',
			'media' => 'media file',
			'media_type' => 'media type'
		];
	}

}
