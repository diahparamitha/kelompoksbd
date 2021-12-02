@extends('layouts/main')

@section('content')

	<div class="container mt-5">
		<div class="row justify-content-center">
			<h2 align="center"> Data Film </h2>
			<div class="col-lg-4">
			 <form action="/film/tambah" method="post" class="mb-5" enctype="multipart/form-data">
       		 {{ csrf_field() }}
          <div class="mb-3">
            <label for="judul_film" class="form-label">Judul</label>
            <input type="text" class="form-control @error('judul_film') is-invalid @enderror" id="judul_film" name="judul_film" autofocus="" required="" value="{{ old('judul_film') }}">
             @error('judul_film') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="id_menu" class="form-label">Pilih menu</label>
            <select class="form-select" name="id_menu" >
              @foreach($menu as $menu)
                @if(old('id_menu') === $menu->id_menu)
              <option value="{{ $menu->id_menu }}" selected>{{ $menu->nama_menu }}</option>
                @else
                <option value="{{ $menu->id_menu }}">{{ $menu->nama_menu }}</option>
                @endif
              @endforeach
            </select>
          </div>

          <div class="mb-3">
            <label for="batasan_umur_film" class="form-label">Batasan umur</label>
            <input type="number" class="form-control @error('batasan_umur_film') is-invalid @enderror" id="batasan_umur_film" name="batasan_umur_film" autofocus="" required="" value="{{ old('batasan_umur_film') }}">
             @error('batasan_umur_film') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="id_genre" class="form-label">Pilih genre</label>
            <select class="form-select" name="id_genre" >
              @foreach($genre as $genre)
                @if(old('id_genre') === $genre->id_genre)
              <option value="{{ $genre->id_genre }}" selected>{{ $genre->nama_genre }}</option>
                @else
                <option value="{{ $genre->id_genre }}">{{ $genre->nama_genre }}</option>
                @endif
              @endforeach
            </select>
          </div>

           <div class="mb-3">
            <label for="id_director" class="form-label">Pilih director</label>
            <select class="form-select" name="id_director" >
              @foreach($director as $director)
                @if(old('id_director') === $director->id_director)
              <option value="{{ $director->id_director }}" selected>{{ $director->nama_director }}</option>
                @else
                <option value="{{ $director->id_director }}">{{ $director->nama_director }}</option>
                @endif
              @endforeach
            </select>
          </div>

          <div class="mb-3">
            <label for="id_pemain" class="form-label">Pilih pemain</label>
            <select class="form-select" name="id_pemain" >
              @foreach($pemain as $pemain)
                @if(old('id_pemain') === $pemain->id_pemain)
              <option value="{{ $pemain->id_pemain }}" selected>{{ $pemain->nama_pemain }}</option>
                @else
                <option value="{{ $pemain->id_pemain }}">{{ $pemain->nama_pemain }}</option>
                @endif
              @endforeach
            </select>
          </div>

          <div class="mb-3">
            <label for="description_film" class="form-label">Deskripsi</label>
            <input type="text" class=" resizedbox form-control @error('description_film') is-invalid @enderror " id="description_film" name="description_film" autofocus="" required="" value="{{ old('description_film') }}">
             @error('description_film') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="komentar_film" class="form-label">Komentar</label>
            <input type="text" class=" resizedbox form-control @error('komentar_film') is-invalid @enderror " id="komentar_film" name="komentar_film" autofocus="" required="" value="{{ old('komentar_film') }}">
             @error('komentar_film') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="cover_film" class="form-label">Cover</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control @error('cover_film') is-invalid @enderror " type="file" id="cover_film" name="cover_film" onchange="previewImage()">
             @error('cover_film') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          
          <button type="submit" class="btn btn-primary">tambah data film</button>
        </form>
		</div>
	</div>
	</div>

	<script>
      
      function previewImage() {
        const image = document.querySelector('#cover_film');
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