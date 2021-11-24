@extends('admin/layouts/main')

@section('content')

@include('layouts/partials/navbar')

	<div class="container">
	  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	        <h1 class="h2">Welcome admin {{ auth()->user()->nama }} !</h1>
	      </div>
	      <h3>Data Pengguna</h3>

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
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
               <td>
                <form action="#" method="post" class="d-inline">
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Hapus data akun ?')"><i class='bx bxs-trash bx-sm'></i>Hapus</button>
                </form>
              </td>
          </thead>
          <tbody>
           
          </tbody>
        </table>
	</div>

@include('layouts/partials/footer')
	
@endsection