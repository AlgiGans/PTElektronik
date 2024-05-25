<?php

namespace App\Http\Controllers;

use App\Models\supplier;
use App\Models\pembelian;
use App\Models\penjualan; 

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class pembelianController extends Controller
{
    public function index(){
        $data = pembelian::get(); 
        return view('Administrator/pembelian/pembelian', compact('data'));
        // $data = pembelian::where('id', 'LIKE', '%'.request()->search.'%')->get();
        // return view('Administrator/pembelians/pembelian', compact('data'));
    }

    public function add(){
        $data_supplier = supplier::get();
        $data_pembelian = pembelian::get();
        $data_penjualan = penjualan::get();
        return view('Administrator/pembelian/addpembelian', compact('data_supplier','data_pembelian','data_penjualan'));
    }

    public function insertdata(Request $request){
        pembelian::create($request->all());
        return redirect()->route('pembelian')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = pembelian::find($id);
        $data_supplier= supplier::get();
        $data_pembelian= pembelian::get();
        $data_penjualan= penjualan::get();
        return view('Administrator/pembelian/updatepembelian' , compact('data', 'data_supplier','data_pembelian','data_penjualan'));
    }


    public function updatedata(Request $request, $id){
        $data = pembelian::find($id);
        $data->update($request->all());
        return redirect()->route('pembelian')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = pembelian::find($id);
        $data->delete();
        return redirect()->route('pembelian')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = pembelian::all();
        $PDF = PDF::loadView('Administrator/pembelian/reportpembelian', array('data' => $data));
        return $PDF->stream('data-pembelian.pdf');
    }
}