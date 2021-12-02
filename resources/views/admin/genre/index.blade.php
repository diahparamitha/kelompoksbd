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
	      <h3>Daftar Genre</h3>
        <p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">Tambah genre</button>
      </p>

	       <table class="table table-striped table-sm mt-3">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Daftar Genre</th>
              <th scope="col">Aksi</th>
            </tr>
            @foreach($genre as $genre)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $genre->nama_genre}}</td>
               <td>
                 <a href="/genre/edit/{{ $genre->id_genre }}" class="badge bg-warning text-decoration-none">Edit</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Menambahkan genre</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="/genre/tambah" method="post">
                  @csrf
                  <div class="mb-3">
                    <label for="nama_genre" class="form-label">Nama genre</label>
                    <input type="text" class="form-control @error('nama_genre') is-invalid @enderror" id="nama_genre" name="nama_genre" autofocus="" required="" value="{{ old('nama_genre')}}">
                     @error('nama_genre', $genre->nama_genre) <!-- kalau users salah memasukkan data akan muncul pesan eror -->
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
	</div>

@include('layouts/partials/footer')
	
@endsection