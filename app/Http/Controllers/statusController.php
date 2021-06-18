<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_komentar;
use App\Models\tb_status;

class statusController extends Controller
{
    public function tambahStatus(){
        return view('tambah-status');
    }
    public function createPost(Request $request){
        $statuses=new tb_status();
        $statuses->nama_status=$request->txt_nama_status;
        $statuses->isi_status=$request->txt_isi_status;
        $statuses->save();
        $statuses=tb_status::with("komentar")->orderBy('id','DESC')->get();
        return view('tugas',compact('statuses'));
        // return back()->with('status_tercipta','Status telah tercipta dengan sempurna');
    }
    public function dapatStatus(){
        $statuses=tb_status::with("komentar")->orderBy('id','DESC')->get();
        return view('tugas',compact('statuses'));
    }
    /*public function dapatStatusDenganID($id){
        $statuses=tb_status::where('id',$id)->first();
        $komentars=tb_komentar::where('id_status', $id)->orderBy('id','DESC')->get();
        return view('lihat-komentar',compact('statuses','komentars'));
    }*/
    public function formKomentar($id){
        $statuses=tb_status::find($id);       
        return view('form-komentar',compact('statuses'));
    }
    public function tambahKomentar(Request $request){
        $komentars=new tb_komentar;
        $komentars->id_status=$request->txt_id_status;
        $komentars->nama_komentar=$request->txt_nama_komentar;
        $komentars->isi_komentar=$request->txt_isi_komentar;
        $komentars->save();
        $statuses=tb_status::with("komentar")->orderBy('id','DESC')->get();
        return view('tugas',compact('statuses'));
        //return back()->with('komentar_bertambah','Komentar telah tercipta dengan sempurna');
    }
}
