<?php
namespace App\Http\Controllers;


use App\Models\Mk_pilihan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User;


class FormulirController extends Controller
{

	public function index(){
        $data['mk_pilihan_1'] = Mk_pilihan::all();
        $data['mk_pilihan_2'] = Mk_pilihan::all();
        $data['mk_pilihan_3'] = Mk_pilihan::all();
        $data['mk_pilihan_4'] = Mk_pilihan::all();
        $data['list_mk_pilihan'] = Mk_pilihan::all();

		return view ('formulir.index', $data);
	}

    public function store(Request $req)
    {

        $mk_pilihan = Mk_pilihan::find(request('nim'));
		if($mk_pilihan) return back()->with('success', 'Anda Sudah Mengisi Formulir');


        $mk_pilihan = New Mk_pilihan;
        $mk_pilihan->nim = request('nim');
        $mk_pilihan->nama = request('nama');
        $mk_pilihan->mining = request('mining');
        $mk_pilihan->kecerdasan = request('kecerdasan');
        $mk_pilihan->spk = request('spk');
        $mk_pilihan->sig = request('sig');
        $mk_pilihan->save();

        return redirect('/')->with('success', 'Data Anda Berhasil Direkam');

    }

    public function selesai()
    {
        $data['list_mk_pilihan'] = Mk_pilihan::all();
        return view('formulir.selesai', $data);
    }
}
