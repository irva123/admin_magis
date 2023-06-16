@extends('layout.main')

@section('judul')
Tables
@endsection

@section('title')
Create Member
@endsection

@section('highlight4')
active
@endsection

@section('navbar')
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card border shadow-xs mb-4">
            <div class="card-header border-bottom pb-0">
              <div class="d-sm-flex align-items-center">
                <div>
            <div class="col-lg-8">        
            <form   method="post" action="/tables_member" enctype= multipart/form-data>
                @csrf
                <div class="mb-3">
                    <label for="id_member" class="form-label">Id Member</label>
                    <input type="text" class="form-control" id="id_member" name="id_member">
                </div>
                <div class="mb-3">
                    <label for="nama_member" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_member" name="nama_member">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
                <div class="mb-3">
                    <label for="no_telepon" class="form-label">No Telepon</label>
                    <input type="text" class="form-control" id="no_telepon" name="no_telepon">
                </div>
                <div class="mb-3">
                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
         </form>
        </div>
                @endsection