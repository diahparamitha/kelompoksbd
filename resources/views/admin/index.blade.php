@extends('admin/layouts/main')

@section('content')

@include('layouts/partials/navbar')

	<div class="container mx-3">
    
    @if(session()->has('delete')) <!-- pesan dari DashboardPostController php line 59 -->
      <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        {{ session('delete') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
      </div>
    @endif

	  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	        <h1 class="h2">Welcome admin {{ auth()->user()->nama }} !</h1>
	      </div>
	      <h3>Data Pengguna</h3>

	       <table class="table table-striped table-sm mt-3">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">No. Hp</th>
              <th scope="col">Foto</th>
              <th scope="col">Tanggal daftar</th>
              <th scope="col">Aksi</th>
            </tr>
            @foreach($users->skip(1) as $user)
            <tr>        
              <td valign="middle">{{$loop->iteration}}</td>
              <td valign="middle">{{$user->nama}}</td>
              <td valign="middle">{{$user->noHp}}</td>
              <td><img src=" /images/{{ $user->foto }} " height="100px" width="100px"></td>
              <td valign="middle">{{$user->created_at->diffForHumans()}}</td>
               <td valign="middle">
                <a class="badge bg-primary text-decoration-none" href="/user/{{$user->id}}">Lihat</a>
                <a href="/user/edit/{{$user->id}}" class="badge bg-warning text-decoration-none">Edit</a>
                <form action="/user/delete/{{$user->id}}" method="post" class="d-inline">
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Hapus data akun {{ $user->nama }} ?')"><i class='bx bxs-trash bx-sm'></i>Hapus</button>
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