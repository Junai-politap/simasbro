<?php
namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Mitra;
use App\Models\Project;
use App\Models\Master;
use App\Models\Jadwal;
use App\Models\Progress;

class MitraController extends Controller
{
    // function Project

    public function index(){

        $data['mitra'] = auth()->guard('mitra')->user();
        return view ('mitra.index', $data);
    }

    public function editmitra($id){

        $data['mitra'] = Mitra::find($id);

        return view('mitra.editmitra', $data);
    }

    public function updatemitra(Request $req,$id){

        $mitra = Mitra::find($id);
        $mitra->nama_mitra = request('nama_mitra');
        $mitra->alamat_mitra = request('alamat_mitra');
        $mitra->sektor = request('sektor');
        $mitra->tipe_organisasi = request('tipe_organisasi');
        $mitra->jumlah_karyawan = request('jumlah_karyawan');
        $mitra->tahun_operasi = request('tahun_operasi');
        $mitra->website = request('website');
        $mitra->email = request('email');
        $mitra->password = request('password');
        $mitra->confir_password = request('confir_password');
        $mitra->pemegang_akses = request('pemegang_akses');
        $mitra->no_hp = request('no_hp');
        $mitra->save();
        $mitra->handleUploadLogo();

        return redirect('mitra-page')->with('success', 'Data Berhasil Di Edit');
    }

    public function project_baru(){
        $data['mitra'] = auth()->guard('mitra')->user();
        $data['list_project'] = Project::all();
        $data['jadwal'] = Jadwal::all();
        return view('mitra.project_baru', $data);
    }

    public function project_berjalan(){
        $data['mitra'] = auth()->guard('mitra')->user();
        $data['list_project'] = Project::all();
        return view('mitra.project_berjalan', $data);
    }

     public function detail($id){
        $data['mitra'] = auth()->guard('mitra')->user();
        $data['project'] = Project::find($id);
        return view('mitra.detail', $data);

    }

    public function project_selesai(){
        $data['list_project'] = Project::all();
        $data['mitra'] = auth()->guard('mitra')->user();
        return view('mitra.project_selesai', $data);
    }

    public function buatproject(){
        $data['mitra'] = auth()->guard('mitra')->user();
        $data['tipe'] = Master::all();
        $data['hki'] = Master::all();
        return view("mitra.buatproject", $data);
    }

    public function projectstore(Request $req){

        $project = new Project;
        $project->id = request('id');
        $project->email = request('email');
        $project->nama_pengusul = request('nama_pengusul');
        $project->no_hp_pengusul = request('no_hp_pengusul');
        $project->email_pengusul = request('email_pengusul');
        $project->alamat_pengusul = request('alamat_pengusul');
        $project->judul_project = request('judul_project');
        $project->kluster_project = request('kluster_project');
        $project->deskripsi_masalah = request('deskripsi_masalah');
        $project->deskripsi_umum = request('deskripsi_umum');
        $project->tipe_project = request('tipe_project');
        $project->potensi_HKI = request('potensi_hki');
        $project->kompetensi_keahlian = request('kompetensi_keahlian');
        $project->status = 1;
        $project->save();

        return redirect('project-baru')->with('success', 'Data Berhasil Di Tambah');
    }

    public function master(){
        $data['mitra'] = auth()->guard('mitra')->user();
        $data['list_master'] = Master::all();
        return view ('mitra.master', $data);
    }

    public function storetipe(Request $req){

        $master = new Master;
        $master->nama = request('nama');
        $master->jenis = 'Tipe';
        $master->save();

        return redirect('master')->with('success', 'Data Berhasil Di Tambah');
    }


    public function storehki(Request $req){

        $master = new Master;
        $master->nama = request('nama');
        $master->jenis = 'HKI';
        $master->save();

        return redirect('master')->with('success', 'Data Berhasil Di Tambah');
    }

    public function showproject($id){

        $data['project'] = Project::find($id);
        $data['mitra'] = auth()->guard('mitra')->user();
        return view('mitra.showproject', $data);

    }

    public function progres($id){

        $data['project'] = Project::find($id);
        $data['list_progress'] = Progress::all();
        $data['mitra'] = auth()->guard('mitra')->user();

        return view('mitra.progres', $data);
    }

    public function editproject($id){

        $data['mitra'] = auth()->guard('mitra')->user();
        $data['project'] = Project::find($id);
        $data['list_mitra'] = Mitra::all();
        $data['list_master'] = Master::all();
         $data['tipe'] = Master::all();
        $data['hki'] = Master::all();
        return view('mitra.editproject', $data);
    }

    public function updateproject(Request $req, $id){

        $project = Project::find($id);
        $project->id = request('id');
        $project->email = request('email');
        $project->nama_pengusul = request('nama_pengusul');
        $project->no_hp_pengusul = request('no_hp_pengusul');
        $project->email_pengusul = request('email_pengusul');
        $project->alamat_pengusul = request('alamat_pengusul');
        $project->judul_project = request('judul_project');
        $project->kluster_project = request('kluster_project');
        $project->deskripsi_masalah = request('deskripsi_masalah');
        $project->deskripsi_umum = request('deskripsi_umum');
        $project->tipe_project = request('tipe_project');
        $project->potensi_HKI = request('potensi_hki');
        $project->kompetensi_keahlian = request('kompetensi_keahlian');

        $project->save();

        return redirect('project-baru')->with('success', 'Data Berhasil Di Tambahkan');

    }

    public function deleteproject($id){
        Project::destroy($id);
        return redirect('project-baru')->with('success', 'Data Berhasil di Hapus');

    }

    public function mastertipe($id){
        Master::destroy($id);
        return redirect('master')->with('error', 'Data Berhasil di Hapus');

    }

    public function masterhki($id){
        Master::destroy($id);
        return redirect('master')->with('error', 'Data Berhasil di Hapus');

    }
    // End Function Project

}
