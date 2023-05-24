<?php
namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Tim;
use App\Models\Berita;
use App\Models\Event;
use App\Models\Mitra;
use App\Models\Project;
use App\Models\Jadwal;

class HomeController extends Controller
{

	public function index(){

		return view ('home.index');
	}

	public function beritapage(){
		$data['list_berita'] = Berita::all();
		return view ('home.berita', $data);
	}

	public function eventpage(){
		$data['list_event'] = Event::all();
		return view ('home.event', $data);
	}

	public function timpage(){
        $data['list_tim'] = Tim::all();
		return view ('home.tim', $data);
	}

	public function showtim($id){
        $data['tim'] = Tim::find($id);

        return view('home.showtim', $data);
    }

	public function contactpage(){

		return view ('home.contact');
	}

    public function pblpage(){

		return view ('home.pbl');
	}

    public function expopage(){

		return view ('home.expo');
	}

	public function proyek_baru(){
		$data['list_project'] = Project::all();
		
		return view ('project_home.proyek_baru', $data);
	}

    public function proyek_saat_ini(){
    	$data['list_project'] = Project::all();
		return view ('project_home.proyek_saat_ini', $data);
	}

	public function buat_proyek(){
		$data['jadwal'] = Jadwal::all();
		return view('project_home.buat_proyek', $data);
	}


	public function mitra(){
		$data['list_mitra'] = Mitra::all();
		return view('home.mitra', $data);
	}
}
