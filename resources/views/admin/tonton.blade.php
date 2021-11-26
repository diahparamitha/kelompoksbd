@extends('admin/layouts/main')

@section('content')

@include('layouts/partials/navbar')

	<div class="container">
	  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	        <h1 class="h2">Welcome admin {{ auth()->user()->nama }} !</h1>
	      </div>
	      <h3>Data Pengguna</h3>
        <p><a href="/tvshow/tambah" class="btn btn-primary">Tambah data tvshow</a></p>

	       <table class="table table-striped table-sm mt-3">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Judul</th>
              <th scope="col">Genre</th>
              <th scope="col">Episode</th>
              <th scope="col">Director</th>
              <th scope="col">Pemain</th>
              <th scope="col">Aksi</th>
            </tr>
            @foreach($tontonan as $tonton)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $tonton->judul_tvshow}}</td>
              <td>{{ $tonton->daftar_genre->nama_genre}}</td>
              <td>{{ $tonton->daftar_episode->no_episode}}</td>
              <td>{{ $tonton->daftar_director->nama_director}}</td>
              <td>{{ $tonton->daftar_pemain->nama_pemain}}</td>
               <td>
                <a href="#" class="badge bg-info text-decoration-none"><span data-feather="eye"></span>Lihat</a>
                <a href="#" class="badge bg-warning text-decoration-none"><span data-feather="edit"></span>Edit</a>
                <form action="#" method="post" class="d-inline">
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Hapus data akun ?')"><i class='bx bxs-trash bx-sm'></i>Hapus</button>
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