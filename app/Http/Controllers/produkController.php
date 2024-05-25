<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class produkController extends Controller
{
    public function index(){
        $data = produk::get(); 
        return view('Administrator/produk/produk', compact('data'));
        // $data = produk::where('nama_produk', 'LIKE', '%'.request()->search.'%')->get();
        // return view('Administrator/produks/produk', compact('data'));
    }

    public function add(){
        return view('Administrator/produk/addproduk');
    }

    public function insertdata(Request $request){
        produk::create($request->all());
        return redirect()->route('produk')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = produk::find($id);
        return view('Administrator/produk/updateproduk' , compact('data'));
    }

    public function alldata($id){
        $data = produk::find($id);
        return view('Administrator/produk/allproduk' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = produk::find($id);
        $data->update($request->all());
        return redirect()->route('produk')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = produk::find($id);
        $data->delete();
        return redirect()->route('produk')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = produk::all();
        $PDF = PDF::loadView('Administrator/produk/reportproduk', array('data' => $data));
        return $PDF->stream('data-produk.pdf');
    }
}