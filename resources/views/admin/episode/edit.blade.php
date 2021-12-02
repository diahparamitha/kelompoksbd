@extends('admin/layouts/main')

@section('content')

@include('layouts/partials/navbar')

	<div class="container mx-3">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <form action="/episode/update/{{$episode->id_episode}}" method="post" class="mb-5" enctype="multipart/form-data">
           {{ csrf_field() }}
          <div class="mb-3">
            <label for="no_episode" class="form-label">Jumlah episode</label>
            <input type="text" class="form-control @error('no_episode') is-invalid @enderror" id="no_episode" name="no_episode" autofocus="" required="" value="{{ old('no_episode', $episode->no_episode) }}">
             @error('no_episode') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
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