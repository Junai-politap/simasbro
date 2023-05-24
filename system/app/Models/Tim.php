<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
*
*/
class Tim extends Model
{

	protected $table = "tim";
	protected $primaryKey = 'id_tim';
	public $incrementing = false;

	function handleUploadPoto()
    {

        if (request()->hasFile('poto')) {
            $poto = request()->file('poto');
            $destination = "tim";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $poto->extension();
            $url = $poto->storeAs($destination, $filename);
            $this->poto = "app/" . $url;
            $this->save();
        }
    } 
}
