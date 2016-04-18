<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TestimonyModel extends Model {

	protected $table = 'testimony';

	protected $primeryKey = 'id';

	protected $fillable = ['tmy_name','tmy_email','tmy_photo','tmy_desc','tmy_location','tmy_status'];

	protected $hidden = ['id'];

}
