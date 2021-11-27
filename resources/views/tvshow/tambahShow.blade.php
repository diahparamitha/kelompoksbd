@extends('layouts/main')

@section('content')

	<div class="container mt-5">
		<div class="row justify-content-center">
			<h2 align="center"> Data tvshow </h2>
			<div class="col-lg-4">
			 <form action="/tvshow/tambahshow" method="post" class="mb-5" enctype="multipart/form-data">
       		 {{ csrf_field() }}
          <div class="mb-3">
            <label for="judul_tvshow" class="form-label">Judul</label>
            <input type="text" class="form-control @error('judul_tvshow') is-invalid @enderror" id="judul_tvshow" name="judul_tvshow" autofocus="" required="" value="{{ old('judul_tvshow') }}">
             @error('judul_tvshow') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="menu_id" class="form-label">Pilih menu</label>
            <select class="form-select" name="menu_id" >
              @foreach($menu as $menu)
                @if(old('menu_id') === $menu->menu_id)
              <option value="{{ $menu->menu_id }}" selected>{{ $menu->nama_menu }}</option>
                @else
                <option value="{{ $menu->menu_id }}">{{ $menu->nama_menu }}</option>
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
            <label for="id_director" class="form-label">Director</label>
            <input type="text" class="form-control @error('id_director') is-invalid @enderror" id="id_director" name="id_director" autofocus="" required="" value="{{ old('id_director') }}">
             @error('id_director') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="id_pemain" class="form-label">Pemain</label>
            <input type="text" class="form-control @error('id_pemain') is-invalid @enderror" id="id_pemain" name="id_pemain" autofocus="" required="" value="{{ old('id_pemain') }}">
             @error('id_pemain') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="id_episode" class="form-label">Jumlah episode</label>
            <input type="number" class="form-control @error('id_episode') is-invalid @enderror" id="id_episode" name="id_episode" autofocus="" required="" value="{{ old('id_episode') }}">
             @error('id_episode') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="description_tvshow" class="form-label">Deskripsi</label>
            <input type="text" class=" resizedbox form-control @error('description_tvshow') is-invalid @enderror " id="description_tvshow" name="description_tvshow" autofocus="" required="" value="{{ old('description_tvshow') }}">
             @error('description_tvshow') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="cover_tvshow" class="form-label">Cover</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control @error('cover_tvshow') is-invalid @enderror " type="file" id="cover_tvshow" name="cover_tvshow" onchange="previewImage()">
             @error('cover_tvshow') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          
          <button type="submit" class="btn btn-primary">tambah data tvshow</button>
        </form>
		</div>
	</div>
	</div>

	<script>
      document.addEvenListener('trix-file-accept', function(e) {  //untuk menonaktifkan fitur link
        e.preventDefault();
      })


      function previewImage() {
        const image = document.querySelector('#cover_tvshow');
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