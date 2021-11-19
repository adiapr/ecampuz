<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Instansi;
use Illuminate\Support\Facades\DB;

class InstansiController extends Controller
{
    // 
    public function index(){
        return view('/index');
    }

    public function add(Request $request){
        $instansi = new Instansi;

        $instansi->instansi     = $request->instansi;
        $instansi->deskripsi    = $request->deskripsi;

        $instansi->save();
        toast('Data berhasil ditambahkan','success');
        return redirect('/home');
    }

    public function delete($id){
        $instansi = Instansi::find($id);
        $instansi->delete();

        toast('Data berhasil dihapus', 'warning');
        return redirect('/home');
    }

    public function update(Request $request, $id){
        $instansi = Instansi::find($id);
        $instansi->instansi     = $request->instansi;
        $instansi->deskripsi    = $request->deskripsi;
        $instansi->update();

        toast('Data berhasil diperbaharui','success');
        return redirect('/home');
    }

    public function search(Request $request){
        $cari = $request->cari;
        $no=1;
        $instansi = DB::table('table_instansi')
                    ->where('instansi', 'like', "%".$cari."%")
                    ->paginate();
        return view('/cari', compact('instansi','no'));
    }
}
