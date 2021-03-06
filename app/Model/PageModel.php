<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PageModel extends Model {

	protected $table = 'pages';

	protected $primeryKey = 'id';

	protected $fillable = ['name','header_img','slug_name','menu_name','user_id','status'];

	protected $hidden = ['id','user_id'];

	public function contented(){
		return $this->hasMany('App\Model\ContentModel');
	}

}
