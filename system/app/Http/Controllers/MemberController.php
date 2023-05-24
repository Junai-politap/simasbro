<?php
namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Mitra;
use App\Models\Project;


class MemberController extends Controller
{

	public function index(){
        $data['user'] = auth()->user();
        $data ['list_mitra'] = Mitra::all();

        $data['data_project'] = Project::all();
        $data['list_project'] = Project::orderBy('id', 'ASC')->take(1)->get();

		return view ('admin/member.index', $data);
	}

    public function storemember(){

        $mitra = new Mitra;
        $mitra->nama_mitra = request('nama_mitra');
        $mitra->alamat_mitra = request('alamat_mitra');
        $mitra->email = request('email');
        $mitra->password = request('password');
        $mitra->confir_password = request('confir_password');
        $mitra->pemegang_akses = request('pemegang_akses');
        $mitra->no_hp = request('no_hp');
        $mitra->status = 1;

        $mitra->handleUploadLogo();
        $mitra->save();


        return redirect ('login')->with('info', 'Untuk Memverifikasi Akun Member Anda. Anda Disuruh untuk Menunggu Selama 2 x 24 jam untuk Memverifikasi Akun Anda !!');
    }

    public function konfir($id){

        $mitra = mitra::find($id);
        $mitra->email = request('email');
        $mitra->username = request('email');
        $mitra->jenis_mitra = request('jenis_mitra');
        $mitra->status = 2;
        $mitra->save();

        return  redirect('page-member')->with('success', 'Data Berhasil di Konfirmasi');

    }

    public function storeinternal(Request $req){

        $mitra = new Mitra;
        $mitra->nama_mitra = request('nama_mitra');
        $mitra->alamat_mitra = request('alamat_mitra');
        $mitra->email = request('email');
        $mitra->username = request('email');
        $mitra->password = request('password');
        $mitra->confir_password = request('confir_password');
        $mitra->pemegang_akses = request('pemegang_akses');
        $mitra->no_hp = request('no_hp');
        $mitra->jenis_mitra = 'Internal';
        $mitra->status = 2;
        $mitra->handleUploadLogo();
        $mitra->save();

        return redirect('page-member')->with('success', 'Data Berhasil di Simpan');
    }

    public function storeeksternal(Request $req){

        $mitra = new Mitra;

        $mitra->nama_mitra = request('nama_mitra');
        $mitra->alamat_mitra = request('alamat_mitra');
        $mitra->email = request('email');
        $mitra->username = request('email');
        $mitra->password = request('password');
        $mitra->confir_password = request('confir_password');
        $mitra->pemegang_akses = request('pemegang_akses');
        $mitra->no_hp = request('no_hp');
        $mitra->jenis_mitra = 'Eksternal';
        $mitra->status = 2;
        $mitra->handleUploadLogo();
        $mitra->save();

        return redirect('page-member')->with('success', 'Data Berhasil di Simpan');
    }

    public function edit($mitra){
        $data['user'] = auth()->user();
        $data['mitra'] = Mitra::find($mitra);
        return view("admin/member.edit", $data);
    }

    public function memberupdate(Request $req,$id){

        $mitra = Mitra::find($id);
        $mitra->nama_mitra = request('nama_mitra');
        $mitra->alamat_mitra = request('alamat_mitra');
        $mitra->sektor = request('sektor');
        $mitra->tipe_organisasi = request('tipe_organisasi');
        $mitra->jumlah_karyawan = request('jumlah_karyawan');
        $mitra->tahun_operasi = request('tahun_operasi');
        $mitra->website = request('website');
        $mitra->email = request('email');
        $mitra->username = request('username');
        $mitra->password = request('confir_password');
        $mitra->confir_password = request('confir_password');
        $mitra->pemegang_akses = request('pemegang_akses');
        $mitra->no_hp = request('no_hp');
        $mitra->save();
        $mitra->handleUploadLogo();

        return  redirect('page-member')->with('success', 'Data Berhasil di Simpan');

    }

    public function memberdelete($id){
        Mitra::destroy($id);
        return redirect('page-member')->with('error', 'Data Berhasil di Hapus');

    }

    public function deletemember($mitra){
        Mitra::destroy($mitra);
        return redirect('page-member')->with('error', 'Data Berhasil di Hapus');

    }

    public function show($id){
        $data['user'] = auth()->user();
        $data['mitra'] = Mitra::find($id);

        return view('admin/member.show', $data);
    }

    public function detail($id){
        $data['user'] = auth()->user();
        $data['mitra'] = Mitra::find($id);

        return view('admin/member.detail', $data);
    }



}
