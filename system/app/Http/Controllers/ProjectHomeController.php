<?php
namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Proyek;
use App\Models\User;


class ProjectHomeController extends Controller
{

	public function proyek_baru(){

		return view ('project_home.proyek_baru');
	}

    public function proyek_saat_ini(){

		return view ('project_home.proyek_saat_ini');
	}

	public function buat_proyek(){
		return view('project_home.buat_proyek');
	}
}
