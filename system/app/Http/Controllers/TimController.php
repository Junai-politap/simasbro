<?php
namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Tim;


class TimController extends Controller
{

    public function pagetim(){
        $data['user'] = auth()->user();
        $data ['list_tim'] = Tim::all();
        return view ('admin/tim.index', $data);
    }

    public function storetim(Request $req){
        $tim = Tim::find($req->nip);
        if($tim) return back()->with('success', 'NIP Sudah Terdaftar');

        $tim = new Tim;
        $tim->nip = request('nip');
        $tim->nama = request('nama');
        $tim->tugas = request('tugas');
        $tim->tanggung_jawab = request('tanggung_jawab');
        $tim->jabatan = request('jabatan');
        $tim->no_telp = request('no_telp');
        if($req->hasFile('poto')){
            $filename = time().Str::random(5).".".$req->poto->getClientOriginalExtension();
                $req->poto->move('public/poto', $filename);
                $tim->poto= $filename;
                $tim->save();
            } 

        return  redirect('page-tim')->with('success', 'Data Berhasil di Simpan');

    }



    public function edit($id){ 
        $data['user'] = auth()->user();
        $data['tim'] = Tim::find($id);
        return view("admin/tim.edit", $data);
    }

    public function update(Request $req,$id){
        
        $tim = Tim::find($id);
        $tim->nip = request('nip');
        $tim->nama = request('nama');
        $tim->tugas = request('tugas');
        $tim->tanggung_jawab = request('tanggung_jawab');
        $tim->jabatan = request('jabatan');
        $tim->no_telp = request('no_telp');
        if($req->hasFile('poto')){
            $filename = time().Str::random(5).".".$req->poto->getClientOriginalExtension();
                $req->poto->move('public/poto', $filename);
                $tim->poto= $filename;
            } 
        $tim->save();

        return  redirect('page-tim')->with('success', 'Data Berhasil di Simpan');
        
    }

    public function delete($id){
        Tim::destroy($id);
        return redirect('page-tim')->with('error', 'Data Berhasil di Hapus');
        
    }

}
