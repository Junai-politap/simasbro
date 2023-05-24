<?php
namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Mitra;
use App\Models\Project;
use App\Models\Jadwal;
use App\Models\User;

class AdminController extends Controller
{

	public function index(){
		$data['user'] = auth()->user();

		$data['baru'] = Project::where('status', '1')->count();
		$data['berjalan'] = Project::where('status', '2')->count();

		$data['internal'] = Mitra::where('jenis_mitra', 'Internal')->count();
		$data['eksternal'] = Mitra::where('jenis_mitra', 'Eksternal')->count();

		$data['list_jadwal'] = Jadwal::all();

		return view ('admin.index', $data);
	}

    public function indexmahasiswa(){
        $data['user'] = auth()->user();
        return view('admin/mahasiswa.indexmahasiswa',$data);
    }

	public function storejadwal(){

		$jadwal = New Jadwal;
		$jadwal->buka = request('buka');
		$jadwal->tutup = request('tutup');
		$jadwal->status = 1;
		$jadwal->save();

		return redirect ('page404');
	}
}
