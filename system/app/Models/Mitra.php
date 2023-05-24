<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;


class Mitra extends Authenticatable
{

    protected $table = "mitra";




    // public static function boot(){

    //     parent::boot();

    //     static::creating(function($item){
    //         $item->id = (string) Str::orderedid();
    //     });
    // }

    public function setPasswordAttribute($value){

        $this->attributes['password'] = bcrypt($value);
    }

	function handleUploadLogo()
    {

        if (request()->hasFile('logo')) {
            $logo = request()->file('logo');
            $destination = "mitra";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $logo->extension();
            $url = $logo->storeAs($destination, $filename);
            $this->logo = "app/" . $url;
            $this->save();
        }
    }

    // public function getLogoUrlAttribute()
    // {
    //     $logo = $this->logo;
    //     if(!$logo) return url('public/app/mitra/ti.PNG');
    //     return url($logo);
    // }


    function getlogo(){
        if (!$this->logo) {
          return asset('public/app/mitra/ti.png');
        }
        return asset('public/' . $this->logo);
    }

    public function getFoto(){
        if(!$this->foto){
            return asset('img/20170818052128.jpg');
        }
        return asset('img/'.$this->foto);
      }

    // function project(){
    //     return $this->belongsTo(Project::class, 'id');
    // }

    function Project(){
		return $this->belongsTo('\App\Models\Project', 'id');
	}
}
