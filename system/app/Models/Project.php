<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
*
*/
class Project extends Model
{

	protected $table = "project";
	protected $primaryKey = 'id_project';
	public $incrementing = false;


	public function setProdiAttribute($value)
    {
        $this->attributes['prodi_terlibat'] = json_encode($value);
    }

    public function getProdiAttribute($value)
    {
        return $this->attributes['prodi_terlibat'] = json_decode($value);
    }



	function Mitra(){
		return $this->belongsTo('\App\Models\Mitra', 'id');
	}

	function Master(){
		return $this->belongsTo('\App\Models\Master', 'id_master');
	}

    function Project(){
		return $this->belongsTo('\App\Models\Project', 'id_project');
	}
}
