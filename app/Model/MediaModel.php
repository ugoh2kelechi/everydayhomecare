<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MediaModel extends Model {

	protected $table = 'page_media';

	protected $primeryKey = 'pm_id';

	protected $fillable = ['media','media_describe','media_type','user_id','content_id','created_at','updated_at'];

	protected $hidden = ['pm_id','updated_at','created_at'];

	public function contentmedia(){
		return $this->belongsTo('App\Model\ContentModel');
	}

}
