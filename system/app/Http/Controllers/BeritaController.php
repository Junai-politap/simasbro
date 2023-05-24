<?php
namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\User;


class BeritaController extends Controller
{

	public function pageberita(){
        $data['user'] = auth()->user();
        $data ['list_berita'] = Berita::orderBy('id_berita', 'DESC')->get();
		return view ('admin/berita.index', $data);
	}

    public function storeberita(Request $req){

		$berita = new Berita;
		$berita->judul_berita = request('judul_berita');
		$berita->deskripsi = request('deskripsi');
        if($req->hasFile('poto')){
            $filename = time().Str::random(5).".".$req->poto->getClientOriginalExtension();
                $req->poto->move('public/berita', $filename);
                $berita->poto= $filename;
                $berita->save();
            }

		return  redirect('page-berita')->with('success', 'Data Berhasil di Simpan');

    }

    public function editberita($id){ 
        $data['user'] = auth()->user();
        $data['berita'] = Berita::find($id);
        return view("admin/berita.edit", $data);
    }

    public function updateberita(Request $req,$id){

        $berita = Berita::find($id);
        $berita->judul_berita = request('judul_berita');
        $berita->deskripsi = request('deskripsi');
        if($req->hasFile('poto')){
            $filename = time().Str::random(5).".".$req->poto->getClientOriginalExtension();
                $req->poto->move('public/berita', $filename);
                $berita->poto= $filename;
            }
        $berita->save();

        return  redirect('page-berita')->with('success', 'Data Berhasil di Simpan');
        
    }

    public function DeleteBerita($id){
        Berita::destroy($id);
        return redirect('page-berita')->with('success', 'Data Berhasil di Hapus');
        
    }

}
