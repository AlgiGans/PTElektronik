@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Tambah Data supplier</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">supplier</li>
        <li class="breadcrumb-item"><a href="{{ route('supplier') }}"></a>Data supplier</li>
        <li class="breadcrumb-item active">Tambah Data supplier</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertsupplier') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="Nama_Supplier" class="form-label">Nama Supplier</label>
            <input type="text" class="form-control" id="Nama_Supplier" name="Nama_Supplier" required>
          </div>
          <div class="col-12">
            <label for="Alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="Alamat" name="Alamat" required>
          </div>
          <div class="col-12">
            <label for="E-mail" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="E-mail" name="E-mail" required>
          </div>
          <div class="col-12">
            <label for="Contact_Person" class="form-label">Contact Person</label>
            <input type="number" class="form-control" id="Contact_Person" name="Contact_Person" required>
          </div>
          <div class="col-12">
            <label for="Nomor_Telepon" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" id="Nomor_Telepon" name="Nomor_Telepon" required>
          </div>
          
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="width: 20%;">Simpan</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection