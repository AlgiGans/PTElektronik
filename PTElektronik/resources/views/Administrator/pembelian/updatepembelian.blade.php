@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Ubah Data pembelian</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">pembelian</li>
        <li class="breadcrumb-item"><a href="{{ route('pembelian') }}"></a>pembelian</li>
        <li class="breadcrumb-item active">Ubah Data pembelian</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('updatepembelian', $data->id) }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="Nomor_Faktur" class="form-label">Nomor_Faktur</label>
            <input type="number" class="form-control" id="Nomor_Faktur" name="Nomor_Faktur" value="{{ $data->Nomor_Faktur }}" required>
          </div>
          <div class="col-12">
            <label for="Nama_Barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="Nama_Barang" name="Nama_Barang" value="{{ $data->Nama_Barang }}" required>
          </div>
          <div class="col-12">
            <label for="Harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="Harga" name="Harga" value="{{ $data->Harga }}" required>
          </div>
          <div class="col-12">
            <label for="Quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="Quantity" name="Quantity" value="{{ $data->Quantity }}" required>
          </div>
          <div class="col-12">
            <label for="Satuan" class="form-label">Satuan</label>
            <input type="text" class="form-control" id="Satuan" name="Satuan" value="{{ $data->Satuan }}" required>
          </div>
          <div class="col-12">
            <label for="Subtotal" class="form-label">Subtotal</label>
            <input type="number" class="form-control" id="Subtotal" name="Subtotal" value="{{ $data->Subtotal }}" required>
          </div>
          <div class="col-12">
            <label for="id_Penjualan" class="form-label">id_Penjualan</label>
            <input type="number" class="form-control" id="id_Penjualan" name="id_Penjualan" value="{{ $data->id_Penjualan }}" required>
          </div>
          <div class="col-12">
            <label for="id_Supplier" class="form-label">id_Supplier</label>
            <input type="number" class="form-control" id="id_Supplier" name="id_Supplier" value="{{ $data->id_Supplier }}" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-success float-left" style="width: 20%;">Update</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection