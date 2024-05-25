<?php

namespace App\Http\Controllers;

use App\Models\supplier;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class supplierController extends Controller
{
    public function index(){
        $data = supplier::get(); 
        return view('Administrator/supplier/supplier', compact('data'));
        // $data = supplier::where('nama_produk', 'LIKE', '%'.request()->search.'%')->get();
        // return view('Administrator/produks/supplier', compact('data'));
    }

    public function add(){
        return view('Administrator/supplier/addsupplier');
    }

    public function insertdata(Request $request){
        supplier::create($request->all());
        return redirect()->route('supplier')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = supplier::find($id);
        return view('Administrator/supplier/updatesupplier' , compact('data'));
    }
    
    public function updatedata(Request $request, $id){
        $data = supplier::find($id);
        $data->update($request->all());
        return redirect()->route('supplier')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = supplier::find($id);
        $data->delete();
        return redirect()->route('supplier')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = supplier::all();
        $PDF = PDF::loadView('Administrator/supplier/reportsupplier', array('data' => $data));
        return $PDF->stream('data-supplier.pdf');
    }
}