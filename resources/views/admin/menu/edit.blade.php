@extends('admin/layouts/main')

@section('content')

@include('layouts/partials/navbar')

	<div class="container mx-3">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <form action="/menu/update/{{$menu->id_menu}}" method="post" class="mb-5" enctype="multipart/form-data">
           {{ csrf_field() }}
          <div class="mb-3">
            <label for="nama_menu" class="form-label">Nama menu</label>
            <input type="text" class="form-control @error('nama_menu') is-invalid @enderror" id="nama_menu" name="nama_menu" autofocus="" required="" value="{{ old('nama_menu', $menu->nama_menu) }}">
             @error('nama_menu') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
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