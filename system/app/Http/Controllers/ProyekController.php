<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Project;
use App\Models\Mitra;
use App\Models\Progress;
use App\Models\User;


class ProyekController extends Controller
{

    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_project'] = Project::all();
        return view('admin/proyek.index', $data);
    }

    public function edit($id)
    {
        $data['user'] = auth()->user();
        $data['project'] = Project::find($id);

        return view('admin/proyek.edit', $data);
    }

    public function setuju(Request $req, $id)
    {

        $project = Project::find($id);
        $project->status_pengajuan = 'Diterima';
        $project->status = 2;

        $project->save();

        return redirect('page-proyek')->with('success', 'Proyek Di Setujui');
    }

    public function tolak(Request $req, $id)
    {

        $project = Project::find($id);
        $project->status_pengajuan = 'Ditolak';
        $project->status = 4;

        $project->save();

        return redirect('page-proyek')->with('success', 'Proyek Di Tolak');
    }

    public function show($id)
    {
        $data['user'] = auth()->user();
        $data['project'] = Project::find($id);
        $data['mitra'] = Mitra::all();
        return view('admin/proyek.show', $data);
    }

    public function showberjalan($id)
    {
        $data['user'] = auth()->user();
        $data['project'] = Project::find($id);
        $data['mitra'] = Mitra::all();
        return view('admin/proyek.showberjalan', $data);
    }

    public function showselesai($id)
    {
        $data['user'] = auth()->user();
        $data['project'] = Project::find($id);
        $data['mitra'] = Mitra::all();
        return view('admin/proyek.showselesai', $data);
    }

    public function berjalan()
    {
        $data['user'] = auth()->user();
        $data['list_project'] = Project::all();

        return view('admin/proyek.berjalan', $data);
    }

    public function selesai()
    {
        $data['user'] = auth()->user();
        $data['list_project'] = Project::all();

        return view('admin/proyek.selesai', $data);
    }

    public function ditolak()
    {
        $data['user'] = auth()->user();
        $data['list_project'] = Project::all();

        return view('admin/proyek.ditolak', $data);
    }

    public function evaluasi($id)
    {
        $data['user'] = auth()->user();
        $data['project'] = Project::find($id);
        // $response = Http::get('https://simadu.politap.ac.id/api/admin/select2/pegawai');
        // $pegawai = $response->json();

        return view('admin/proyek.evaluasi', $data);
    }

    public function storeborang(Request $req, $id)
    {
        $project = Project::find($id);
        $project->level_kompleksitas = request('level_kompleksitas');
        $project->prodi_terlibat = request('prodi_terlibat');
        $project->mp_internal = request('mp_internal');
        $project->mp_eksternal = request('mp_eksternal');
        $project->tahun_pelaksana = request('tahun_pelaksana');
        $project->save();

        return redirect('berjalan')->with('success', 'Data Berhasil di Simpan');
    }

    public function storeprogress()
    {
        $progress = New Progress;
        $progress->id_project = request('id_project');
        $progress->nama_progress = request('nama_progress');
        $progress->detail = request('detail');
        $progress->save();
        return redirect('berjalan')->with('success', 'Catatan Progress Berhasil di Simpan');
    }

    public function deleteproject($id){

        Project::destroy($id);
        return redirect('berjalan')->with('error', 'Data Berhasil di Hapus');

    }
}
