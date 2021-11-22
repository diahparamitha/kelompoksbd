@extends('layouts/main')

@section('content')

	<div class="row justify-content-center">
    <div class="col-md-6">
      <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2  border-bottom">
        <h1 class="h2">Edit Profil</h1>
      </div>

    <div class="align-items-center">
       <form method="post" action="/user/update/{{ $users->id }}" enctype="multipart/form-data">
        {{ csrf_field() }}
          <div class="mb-3">
            <label for="nama" class="form-label">Nama lengkap</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" autofocus="" required="" value="{{ old('nama', $users->nama) }}">
             @error('nama') <!-- kalau users salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" autofocus="" required="" value="{{ old('email', $users->email) }}">
             @error('email') <!-- kalau users salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" autofocus="" required="" value="{{ old('tanggal_lahir', $users->tanggal_lahir) }}">
             @error('tanggal_lahir') <!-- kalau users salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
               <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" name="jenisKelamin" value="{{old('jenisKelamin', $users->jenisKelamin)}}">
              <option value="hidden" selected>Pilih</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="noHp" class="form-label">No. Hp</label>
            <input type="number" class="form-control @error('noHp') is-invalid @enderror" id="noHp" name="noHp" autofocus="" required=""  value="{{ old('noHp', $users->noHp) }}">
             @error('noHp') <!-- kalau users salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="foto" class="form-label">Foto Profil</label>
            <input type="hidden" name="fotoLama" value="{{ $users->foto }}">
            @if($users->foto)
              <img src="/images/{{ $users->foto}}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
              <img class="img-preview img-fluid mb-3 col-sm-5">
            @endif
            <input class="form-control @error('foto') is-invalid @enderror " type="file" id="foto" name="foto" onchange="previewImage()">
             @error('foto') <!-- kalau users salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          
          <button type="submit" class="btn btn-primary">Simpan profil</button>
        </form>
    </div>
    </div>
  </div>
  
    <script>

      function previewImage() {
        const image = document.querySelector('#foto');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }
    </script>

@endsection