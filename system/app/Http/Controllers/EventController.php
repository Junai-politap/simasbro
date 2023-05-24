<?php
namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;


class EventController extends Controller
{

    public function pageevent(){

        $data['user'] = auth()->user();
        $data ['list_event'] = Event::orderBy('id_event', 'DESC')->get();
        return view ('admin/event.index', $data);
    }

    public function storeevent(Request $req){

        $event = new Event;
        $event->judul_event = request('judul_event');
        $event->deskripsi = request('deskripsi');
        if($req->hasFile('poto')){
            $filename = time().Str::random(5).".".$req->poto->getClientOriginalExtension();
                $req->poto->move('public/event', $filename);
                $event->poto= $filename;
                $event->save();
            }

        return  redirect('page-event')->with('success', 'Data Berhasil di Simpan');

    }

     public function editevent($id){ 
        $data['user'] = auth()->user();
        $data['event'] = Event::find($id);
        return view("admin/event.edit", $data);
    }

    public function updateevent(Request $req,$id){

        $event = Event::find($id);
         $event->judul_event = request('judul_event');
        $event->deskripsi = request('deskripsi');
        if($req->hasFile('poto')){
            $filename = time().Str::random(5).".".$req->poto->getClientOriginalExtension();
                $req->poto->move('public/event', $filename);
                $event->poto= $filename;
            }
        $event->save();

        return  redirect('page-event')->with('success', 'Data Berhasil di Simpan');
        
    }

    public function Deleteevent($id){
        Event::destroy($id);
        return redirect('page-event')->with('success', 'Data Berhasil di Hapus');
        
    }

}
