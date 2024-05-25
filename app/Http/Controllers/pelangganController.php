<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class pelangganController extends Controller
{
    public function index(){
        $data = pelanggan::get(); 
        return view('Administrator/pelanggan/pelanggan', compact('data'));
        // $data = pelanggan::where('nama_pelanggan', 'LIKE', '%'.request()->search.'%')->get();
        // return view('Administrator/pelanggans/pelanggan', compact('data'));
    }

    public function add(){
        return view('Administrator/pelanggan/addpelanggan');
    }

    public function insertdata(Request $request){
        pelanggan::create($request->all());
        return redirect()->route('pelanggan')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = pelanggan::find($id);
        return view('Administrator/pelanggan/updatepelanggan' , compact('data'));
    }

    public function alldata($id){
        $data = pelanggan::find($id);
        return view('Administrator/pelanggan/allpelanggan' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = pelanggan::find($id);
        $data->update($request->all());
        return redirect()->route('pelanggan')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = pelanggan::find($id);
        $data->delete();
        return redirect()->route('pelanggan')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = pelanggan::all();
        $PDF = PDF::loadView('Administrator/pelanggan/reportpelanggan', array('data' => $data));
        return $PDF->stream('data-pelanggan.pdf');
    }
}