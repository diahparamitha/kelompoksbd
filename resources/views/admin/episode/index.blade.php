@extends('admin/layouts/main')

@section('content')

@include('layouts/partials/navbar')

	<div class="container mx-3">

    @if(session()->has('success')) 
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
      </div>
    @endif

    @if(session()->has('edit')) 
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        {{ session('edit') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
      </div>
    @endif

	  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	        <h1 class="h2">Welcome admin {{ auth()->user()->nama }} !</h1>
	      </div>
	      <h3>Daftar episode</h3>
        <p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">Tambah episode</button>
      </p>

	       <table class="table table-striped table-sm mt-3">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Daftar episode</th>
              <th scope="col">Aksi</th>
            </tr>
            @foreach($episodes as $episode)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $episode->no_episode}}</td>
               <td>
                 <a href="/episode/edit/{{ $episode->id_episode }}" class="badge bg-warning text-decoration-none">Edit</a>
              </td>
            </tr> 
            @endforeach
          </thead>
          <tbody>
           
          </tbody>
        </table>

         <div class="modal fade" id="tambah">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Menambahkan episode</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="/episode/tambah" method="post">
                  @csrf
                  <div class="mb-3">
                    <label for="no_episode" class="form-label">Jumlah episode</label>
                    <input type="text" class="form-control @error('no_episode') is-invalid @enderror" id="no_episode" name="no_episode" autofocus="" required="" value="{{ old('no_episode')}}">
                     @error('no_episode', $episode->no_episode) <!-- kalau users salah memasukkan data akan muncul pesan eror -->
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">simpan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-end">
      {{ $episodes->links() }}  <!-- untuk pagination -->
    </div>
	</div>

@include('layouts/partials/footer')
	
@endsection