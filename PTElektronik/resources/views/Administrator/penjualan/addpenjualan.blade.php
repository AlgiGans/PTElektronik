@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Tambah Data penjualan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">penjualan</li>
        <li class="breadcrumb-item"><a href="{{ route('penjualan') }}"></a>Data penjualan</li>
        <li class="breadcrumb-item active">Tambah Data penjualan</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertpenjualan') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="Nomor_Faktur" class="form-label">Nomor Faktur</label>
            <input type="number" class="form-control" id="Nomor_Faktur" name="Nomor_Faktur" required>
          </div>
          <div class="col-12">
            <label for="Nama_Barang" class="form-label">Nama_Barang</label>
            <input type="text" class="form-control" id="Nama_Barang" name="Nama_Barang" required>
          </div>
          <div class="col-12">
            <label for="Harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="Harga" name="Harga" required>
          </div>
          <div class="col-12">
            <label for="Quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="Quantity" name="Quantity" required>
          </div>
          <div class="col-12">
            <label for="Satuan" class="form-label">Satuan</label>
            <input type="text" class="form-control" id="Satuan" name="Satuan" required>
          </div>
          <div class="col-12">
            <label for="Subtotal" class="form-label">Subtotal</label>
            <input type="number" class="form-control" id="Subtotal" name="Subtotal" required>
          </div>
          <div class="col-12">
            <label for="Tanggal_Faktur" class="form-label">Tanggal_Faktur</label>
            <input type="date" class="form-control" id="Tanggal_Faktur" name="Tanggal_Faktur" required>
          </div>
          <div class="col-12">
            <label for="id_Barang" class="form-label">id_Barang</label>
            <input type="number" class="form-control" id="id_Barang" name="id_Barang" required>
          </div>  <div class="col-12">
            <label for="id_Pelanggan" class="form-label">id_Pelanggan</label>
            <input type="number" class="form-control" id="id_Pelanggan" name="id_Pelanggan" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="width: 20%;">Simpan</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection