<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\asset;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class assetController extends Controller
{
    public function index(){
        $data = asset::get(); 
        return view('Administrator/asset/asset', compact('data'));
        // $data = asset::where('id', 'LIKE', '%'.request()->search.'%')->get();
        // return view('Administrator/assets/asset', compact('data'));
    }

    public function add(){
        $data_produk = produk::get();
        return view('Administrator/asset/addasset', compact('data_produk'));
    }

    public function insertdata(Request $request){
        asset::create($request->all());
        return redirect()->route('asset')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = asset::find($id);
        $data_produk= produk::get();
        return view('Administrator/asset/updateasset' , compact('data', 'data_produk'));
    }

    public function alldata($id){
        $data = asset::find($id);
        $data_produk = produk::get();
        return view('Administrator/asset/allasset' , compact('data', 'data_produk'));
    }

    public function updatedata(Request $request, $id){
        $data = asset::find($id);
        $data->update($request->all());
        return redirect()->route('asset')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = asset::find($id);
        $data->delete();
        return redirect()->route('asset')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = asset::all();
        $PDF = PDF::loadView('Administrator/asset/reportasset', array('data' => $data));
        return $PDF->stream('data-asset.pdf');
    }
}