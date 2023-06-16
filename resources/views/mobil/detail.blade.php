@extends('layout.main')

@section('judul')
Tables
@endsection

@section('title')
Table Mobil
@endsection

@section('highlight2')
active
@endsection

@section('navbar')
<section class="vh-100" style="background-color: #e6e6fa;">
  <div class="container py-2 h-100" >
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-md-9 col-lg-7 col-xl-5">
        <div class="card" style="border-radius: 15px; width: 650px; height: 420px">
          <div class="card-body p-4">
            <div class="d-flex text-black mt-3">
              <div class="flex-shrink-0">
              <div class="d-flex justify-content-start rounded-3 mb-2 pt-5 pb-5 mt-5 me-3"
                  style="background-color: #efefef;">
                <img src ="{{ url('storage/'.$tables_mobil->foto) }}"
                  alt="Generic placeholder image" class="img-fluid"
                  style="width: 200px; border-radius: 10px;">
                  </div>
              </div>
              <div class="col-lg-8">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Plat Nomor</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">: {{ $tables_mobil->plat_nomor }}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Jenis Mobil</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">: {{ $tables_mobil->jenis_mobil }}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Merk</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">: {{ $tables_mobil->merk }}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Kapasitas</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">: {{ $tables_mobil->kapasitas }}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Tahun</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">: {{ $tables_mobil->tahun }}</p>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  @endsection