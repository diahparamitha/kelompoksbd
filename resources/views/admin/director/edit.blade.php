@extends('admin/layouts/main')

@section('content')

@include('layouts/partials/navbar')

	<div class="container mx-3">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <form action="/director/update/{{$director->id_director}}" method="post" class="mb-5" enctype="multipart/form-data">
           {{ csrf_field() }}
          <div class="mb-3">
            <label for="nama_director" class="form-label">Jumlah director</label>
            <input type="text" class="form-control @error('nama_director') is-invalid @enderror" id="nama_director" name="nama_director" autofocus="" required="" value="{{ old('nama_director', $director->nama_director) }}">
             @error('nama_director') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
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