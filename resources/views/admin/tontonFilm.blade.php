@extends('admin/layouts/main')

@section('content')

@include('layouts/partials/navbar')

	<div class="container">

    @if(session()->has('success')) 
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
      </div>
    @endif

    @if(session()->has('delete')) 
      <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        {{ session('delete') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
      </div>
    @endif

    <!-- @if(session()->has('edit'))
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        {{ session('edit') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
      </div>
    @endif -->

	  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	        <h1 class="h2">Welcome admin {{ auth()->user()->nama }} !</h1>
	      </div>
	      <h3>Data Film</h3>
        <p><a href="/film/tambah" class="btn btn-primary">Tambah data film</a></p>

	       <table class="table table-striped table-sm mt-3">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Judul</th>
              <th scope="col">Menu</th>
              <th scope="col">Genre</th>
              <th scope="col">Director</th>
              <th scope="col">Pemain</th>
              <th scope="col">Aksi</th>
            </tr>
            @foreach($film as $film)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $film->judul_film}}</td>
              <td>{{ $film->daftar_menu->nama_menu}}</td>
              <td>{{ $film->daftar_genre->nama_genre}}</td>
              <td>{{ $film->daftar_director->nama_director}}</td>
              <td>{{ $film->daftar_pemain->nama_pemain}}</td>
               <td>
                <a href="/film-info/{{ $film->id_film }}" class="badge bg-info text-decoration-none"><span data-feather="eye"></span>Lihat</a>
                <a href="" class="badge bg-warning text-decoration-none"><span data-feather="edit"></span>Edit</a>
                <form action="/film-info/delete/{{ $film->id_film }}" method="post" class="d-inline">
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Hapus film {{ $film->judul_film}} ?')"><i class='bx bxs-trash bx-sm'></i>Hapus</button>
                </form>
              </td>
            </tr>
            @endforeach
          </thead>
          <tbody>
           
          </tbody>
        </table>
	</div>

@include('layouts/partials/footer')
	
@endsection