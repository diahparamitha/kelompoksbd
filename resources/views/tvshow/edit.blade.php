@extends('layouts/main')

@section('content')

	<div class="container mt-5">
		<div class="row justify-content-center">
			<h2 align="center"> Edit Data tvshow </h2>
			<div class="col-lg-4">
			 <form action="/tvshow-info/update/{{$tvshow->id_tvshow}}" method="post" class="mb-5" enctype="multipart/form-data">
       		 {{ csrf_field() }}
          <div class="mb-3">
            <label for="judul_tvshow" class="form-label">Judul</label>
            <input type="text" class="form-control @error('judul_tvshow') is-invalid @enderror" id="judul_tvshow" name="judul_tvshow" autofocus="" required="" value="{{ old('judul_tvshow', $tvshow->judul_tvshow) }}">
             @error('judul_tvshow') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

         <div class="mb-3">
            <label for="id_menu" class="form-label">Pilih Menu</label>
            <select class="form-select" name="id_menu" >
              @foreach($menu as $menu)
                @if(old('id_menu', $tvshow->id_menu) === $menu->id_menu)
              <option value="{{ $menu->id_menu }}" selected>{{ $menu->nama_menu }}</option>
                @else
                <option value="{{ $menu->id_menu }}">{{ $menu->nama_menu }}</option>
                @endif
              @endforeach
            </select>
          </div>

          <div class="mb-3">
            <label for="batasan_umur_tvshow" class="form-label">Batasan umur</label>
            <input type="number" class="form-control @error('batasan_umur_tvshow') is-invalid @enderror" id="batasan_umur_tvshow" name="batasan_umur_tvshow" autofocus="" required="" value="{{ old('batasan_umur_tvshow', $tvshow->batasan_umur_tvshow) }}">
             @error('batasan_umur_tvshow') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

           <div class="mb-3">
            <label for="id_genre" class="form-label">Pilih Genre</label>
            <select class="form-select" name="id_genre" >
              @foreach($genre as $genre)
                @if(old('id_genre', $tvshow->id_genre) === $genre->id_genre)
              <option value="{{ $genre->id_genre }}" selected>{{ $genre->nama_genre }}</option>
                @else
                <option value="{{ $genre->id_genre }}">{{ $genre->nama_genre }}</option>
                @endif
              @endforeach
            </select>
          </div>

            <div class="mb-3">
            <label for="id_director" class="form-label">Pilih Director</label>
            <select class="form-select" name="id_director" >
              @foreach($director as $director)
                @if(old('id_director', $tvshow->id_director) === $director->id_director)
              <option value="{{ $director->id_director }}" selected>{{ $director->nama_director }}</option>
                @else
                <option value="{{ $director->id_director }}">{{ $director->nama_menu }}</option>
                @endif
              @endforeach
            </select>
          </div>

          <div class="mb-3">
            <label for="id_pemain" class="form-label">Pilih Pemain</label>
            <select class="form-select" name="id_pemain" >
              @foreach($pemain as $pemain)
                @if(old('id_pemain', $tvshow->id_pemain) === $pemain->id_pemain)
              <option value="{{ $pemain->id_pemain }}" selected>{{ $pemain->nama_pemain }}</option>
                @else
                <option value="{{ $pemain->id_pemain }}">{{ $pemain->nama_pemain }}</option>
                @endif
              @endforeach
            </select>
          </div>

           <div class="mb-3">
            <label for="id_episode" class="form-label">Jumlah Episode</label>
            <select class="form-select" name="id_episode" >
              @foreach($episode as $episode)
                @if(old('id_episode', $tvshow->id_episode) === $episode->id_episode)
              <option value="{{ $episode->id_episode }}" selected>{{ $episode->no_episode }}</option>
                @else
                <option value="{{ $episode->id_episode }}">{{ $episode->no_episode }}</option>
                @endif
              @endforeach
            </select>
          </div>

          <div class="mb-3">
            <label for="description_tvshow" class="form-label">Deskripsi</label>
            <input type="text" class=" resizedbox form-control @error('description_tvshow') is-invalid @enderror " id="description_tvshow" name="description_tvshow" autofocus="" required="" value="{{ old('description_tvshow', $tvshow->description_tvshow) }}">
             @error('description_tvshow') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="komentar_tvshow" class="form-label">Komentar</label>
            <input type="text" class=" resizedbox form-control @error('komentar_tvshow') is-invalid @enderror " id="komentar_tvshow" name="komentar_tvshow" autofocus="" required="" value="{{ old('komentar_tvshow', $tvshow->komentar_tvshow) }}">
             @error('komentar_tvshow') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="cover_tvshow" class="form-label">Cover</label>
            <input type="hidden" name="cover_tvshowLama" value="{{ $tvshow->cover_tvshow }}">
            @if($tvshow->cover_tvshow)
              <img src=" /images/tvshow/{{ $tvshow->cover_tvshow }} " class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
              <img class="img-preview img-fluid mb-3 col-sm-5">
            @endif
            <input class="form-control @error('cover_tvshow') is-invalid @enderror " type="file" id="cover_tvshow" name="cover_tvshow" onchange="previewImage()">
             @error('cover_tvshow') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          
          <button type="submit" class="btn btn-primary">simpan data tvshow</button>
        </form>
		</div>
	</div>
	</div>

	<script>


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