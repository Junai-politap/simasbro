<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Master extends Model
{
	
	protected $table = "master";
	
	protected $primaryKey = 'id_master';
	public $incrementing = false;

	function project(){
		return $this->belongsTo('\App\Models\project', 'id_master');
	}

}
