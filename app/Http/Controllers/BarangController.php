<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Logbarangterhapus;
use Illuminate\Support\Facades\DB;
class BarangController extends Controller
{
    public function dashboard(){
        $data=Barang::all();
        return view('dashboardbarang',compact('data'));
    }
    public function tambahbarang(){

        return view ('TambahData');


    }
    public function insertdata(Request $request){
        Barang::create($request->all());
        return redirect()->route('dashboard')->with('Succes','Data Berhasil Di tambahkan !');

    }
    public function tampildatabarang($id){
        $data = Barang::find($id);
      return view('updatedatabarang',compact('data'));
    }
    public function updatedatabarang(Request $request,$id){
        $data = Barang::find($id);
        $data->update($request->all());
        return redirect()->route('dashboard')->with('Succes','Data Berhasil Di update !');

        }
    public function deletedatabarang($id){
        $data = Barang::find($id);
        $data->delete();
        return redirect()->route('dashboard')->with('Succes','Data Berhasil Di Hapus !');

    }
    public function detailbarang(){
        $detailbarang= DB::table('logbarangmasuk')
        ->join('barangs', 'logbarangmasuk.idbarang', '=', 'barangs.id')
        ->select( 'logbarangmasuk.idlogmasuk','barangs.id','barangs.Namabarang', 'barangs.Tanggalmasuk','barangs.Jumlah','logbarangmasuk.Status')
        ->paginate(5);
        return view('dashboardbarangmasuk',['barangs'=>$detailbarang],compact('detailbarang'));

    }
    public function tampildatabarangterhapus(){
        $data = Logbarangterhapus::all();
      return view('dashboardbarangterhapus',compact('data'));
    }


}
