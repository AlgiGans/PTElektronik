@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Tambah Data asset</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">asset</li>
        <li class="breadcrumb-item"><a href="{{ route('asset') }}"></a>Data asset</li>
        <li class="breadcrumb-item active">Tambah Data asset</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertasset') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="Nama_Barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="Nama_Barang" name="Nama_Barang" required>
          </div>
          <div class="col-12">
            <label for="Satuan" class="form-label">Satuan</label>
            <input type="text" class="form-control" id="Satuan" name="Satuan" required>
          </div>
          <div class="col-12">
            <label for="Kategori" class="form-label">Kategori</label>
            <input type="text" class="form-control" id="Kategori" name="Kategori" required>
          </div>
          <div class="col-12">
            <label for="Quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="Quantity" name="Quantity" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="width: 20%;">Simpan</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection