<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
*
*/
class Progress extends Model
{

	protected $table = "progress";

	protected $primaryKey = 'id_progress';
	public $incrementing = false;

    function Project(){
		return $this->belongsTo('\App\Models\Project', 'id_project');
	}
}
