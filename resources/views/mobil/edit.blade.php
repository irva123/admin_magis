@extends('layout.main')

@section('judul')
Tables
@endsection

@section('title')
Form Edit Table Mobil
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
            <form method="post" action="{{ route('tables_mobil.update', $tables_mobil->id) }}" enctype= multipart/form-data>
            @method ('PUT')    
            @csrf
                <div class="mb-3">
                    <label for="plat_nomor" class="form-label">Plat Nomor</label>
                    <input type="text" class="form-control @error('plat_nomor') is-invalid @enderror" id="plat_nomor" 
                    name="plat_nomor" value = "{{ $tables_mobil->plat_nomor }}">
                @error('plat_nomor')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="jenis_mobil" class="form-label">Jenis Mobil</label>
                    <input type="text" class="form-control @error('jenis_mobil') is-invalid @enderror" id="jenis_mobil" 
                    name="jenis_mobil" value = "{{ $tables_mobil->jenis_mobil }}">
                @error('jenis_mobil')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="merk" class="form-label">Merk</label>
                    <input type="text" class="form-control @error('merk') is-invalid @enderror" id="merk" 
                    name="merk" value = "{{ $tables_mobil->merk }}">
                @error('merk')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="kapasitas" class="form-label">Kapasitas</label>
                    <input type="text" class="form-control @error('kapasitas') is-invalid @enderror" id="kapasitas" 
                    name="kapasitas" value = "{{ $tables_mobil->kapasitas }}">
                @error('kapasitas')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input type="text" class="form-control @error('tahun') is-invalid @enderror" id="tahun" 
                    name="tahun" value = "{{ $tables_mobil->tahun }}">
                @error('tahun')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="tarif" class="form-label">Tarif</label>
                    <input type="text" class="form-control @error('tarif') is-invalid @enderror" id="tarif" 
                    name="tarif" value = "{{ $tables_mobil->tarif }}">
                @error('tarif')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <div class="col-md-12 mb-2">
                    <img id="preview-image-before-upload" src="{{ url('storage/'.$tables_mobil->foto) }}"
                    alt="preview image" style="max-height: 150px;">
                </div>
                <input class="form-control @error('foto') is-invalid @enderror" type="file" id="foto" 
                name="foto" value = "{{ $tables_mobil->foto }}">
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

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        
        <script type="text/javascript">

        $(document).ready(function (e) {
        
        $('#foto').change(function(){
                    
            let reader = new FileReader();
        
            reader.onload = (e) => { 
        
            $('#preview-image-before-upload').attr('src', e.target.result); 
            }
        
            reader.readAsDataURL(this.files[0]); 
        
        });
        
        });
 
</script>
