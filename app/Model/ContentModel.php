<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ContentModel extends Model {

	protected $table = 'page_content';

	protected $primeryKey = 'pc_id';

	protected $fillable = ['title','description','contents','user_id','page_id','created_at','updated_at'];

	protected $hidden = ['pc_id','updated_at','created_at'];

	public function paged(){
		return $this->belongsTo('PageModel');
	}

}
