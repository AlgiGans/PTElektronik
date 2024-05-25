<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\penjualan;
use App\Models\pelanggan; 

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class penjualanController extends Controller
{
    public function index(){
        $data = penjualan::get(); 
        return view('Administrator/penjualan/penjualan', compact('data'));
        // $data = penjualan::where('id', 'LIKE', '%'.request()->search.'%')->get();
        // return view('Administrator/penjualans/penjualan', compact('data'));
    }

    public function add(){
        $data_produk = produk::get();
        $data_penjualan = penjualan::get();
        $data_pelanggan = pelanggan::get();
        return view('Administrator/penjualan/addpenjualan', compact('data_produk','data_penjualan','data_pelanggan'));
    }

    public function insertdata(Request $request){
        penjualan::create($request->all());
        return redirect()->route('penjualan')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = penjualan::find($id);
        $data_produk= produk::get();
        $data_penjualan= penjualan::get();
        $data_pelanggan= pelanggan::get();
        return view('Administrator/penjualan/updatepenjualan' , compact('data', 'data_produk','data_penjualan','data_pelanggan'));
    }


    public function updatedata(Request $request, $id){
        $data = penjualan::find($id);
        $data->update($request->all());
        return redirect()->route('penjualan')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = penjualan::find($id);
        $data->delete();
        return redirect()->route('penjualan')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = penjualan::all();
        $PDF = PDF::loadView('Administrator/penjualan/reportpenjualan', array('data' => $data));
        return $PDF->stream('data-penjualan.pdf');
    }
}