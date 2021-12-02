@extends('admin/layouts/main')

@section('content')

@include('layouts/partials/navbar')

	<div class="container mx-3">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <form action="/pemain/update/{{$pemain->id_pemain}}" method="post" class="mb-5" enctype="multipart/form-data">
           {{ csrf_field() }}
          <div class="mb-3">
            <label for="nama_pemain" class="form-label">Nama pemain</label>
            <input type="text" class="form-control @error('nama_pemain') is-invalid @enderror" id="nama_pemain" name="nama_pemain" autofocus="" required="" value="{{ old('nama_pemain', $pemain->nama_pemain) }}">
             @error('nama_pemain') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
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