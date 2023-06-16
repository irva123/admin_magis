@extends('layout.main')

@section('judul')
Tables
@endsection

@section('title')
Form Create Mobil
@endsection

@section('highlight2')
active
@endsection

@section('navbar')
<div class="row">
        <div class="col-12">
          <div class="card border shadow-xs mb-4">
            <div class="card-header border-bottom pb-0">
              <div class="d-sm-flex align-items-center">
            <div class="col-lg-8">        
            <form method="post" action="/tables_mobil" enctype= multipart/form-data>
                @csrf
                <div class="mb-3">
                    <label for="plat_nomor" class="form-label">Plat Nomor</label>
                    <input type="text" class="form-control @error('plat_nomor') is-invalid @enderror" id="plat_nomor" 
                    name="plat_nomor" required autofocus value = "{{ old('plat_nomor') }}">
                @error('plat_nomor')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="jenis_mobil" class="form-label">Jenis Mobil</label>
                    <input type="text" class="form-control @error('jenis_mobil') is-invalid @enderror" id="jenis_mobil" 
                    name="jenis_mobil" required autofocus value = "{{ old('jenis_mobil') }}">
                @error('jenis_mobil')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="merk" class="form-label">Merk</label>
                    <input type="text" class="form-control @error('merk') is-invalid @enderror" id="merk" 
                    name="merk" required autofocus value = "{{ old('merk') }}">
                @error('merk')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="kapasitas" class="form-label">Kapasitas</label>
                    <input type="text" class="form-control @error('kapasitas') is-invalid @enderror" id="kapasitas" 
                    name="kapasitas" required autofocus value = "{{ old('kapasitas') }}">
                @error('kapasitas')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input type="text" class="form-control @error('tahun') is-invalid @enderror" id="tahun" 
                    name="tahun" required autofocus value = "{{ old('tahun') }}">
                @error('tahun')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="tarif" class="form-label">Tarif</label>
                    <input type="text" class="form-control @error('tarif') is-invalid @enderror" id="tarif" 
                    name="tarif" required autofocus value = "{{ old('tarif') }}">
                @error('tarif')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input class="form-control @error('foto') is-invalid @enderror" type="file" id="foto" 
                name="foto" required autofocus value = "{{ old('foto') }}">
                @error('foto')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
            </div>
                <div class="form-group">
                <label for="status_id">Status</label>
                <select class="form-select" name="status_id">
                @foreach($status as $status)
                @if(old('status_id') == $status->id)
                    <option value="{{$status->id}}" selected>{{ $status->status_mobil }}</option>
                @else 
                    <option value="{{$status->id}}">{{ $status->status_mobil }}</option>
                @endif
                @endforeach
                </select></br>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
         </form>
        </div>
        </div>
        </div>
        </div>
        </div>
        @endsection