<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Prodi;


class ProdiController extends Controller
{

	public function index(){
        $data ['list_prodi'] = Prodi::all();
		return view ('admin/prodi.index', $data);
	}

    public function storeprodi(Request $req){
        $prodi = Prodi::find($req->nip);
		if($prodi) return back()->with('success', 'NIP Sudah Terdaftar');

        $user = new User;
        $user->nama = $req->nama;
		$user->username = $req->nip;
		$user->password = bcrypt($req->nip);
		$user->level = 2;
		$user->save();

		$prodi = new Prodi;
		$prodi->nip = request('nip');
        $prodi->id_user = $user->id;
		$prodi->nama = request('nama');
        $prodi->jabatan = request('jabatan');
        $prodi->prodi = request('prodi');
        if($req->hasFile('poto')){
            $filename = time().Str::random(5).".".$req->poto->getClientOriginalExtension();
                $req->poto->move('public/prodi', $filename);
                $prodi->poto= $filename;
                $prodi->save();
            }

		return  redirect('pageprodi')->with('success', 'Data Berhasil di Simpan');

    }

}
