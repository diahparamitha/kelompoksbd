@extends('admin/layouts/main')

@section('content')

@include('layouts/partials/navbar')

	<div class="container mx-3">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <form action="/genre/update/{{$genre->id_genre}}" method="post" class="mb-5" enctype="multipart/form-data">
           {{ csrf_field() }}
          <div class="mb-3">
            <label for="nama_genre" class="form-label">Nama genre</label>
            <input type="text" class="form-control @error('nama_genre') is-invalid @enderror" id="nama_genre" name="nama_genre" autofocus="" required="" value="{{ old('nama_genre', $genre->nama_genre) }}">
             @error('nama_genre') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">simpan</button>
        </form>
      </div>
    </div>
	</div>

@include('layouts/partials/footer')
	
@endsection