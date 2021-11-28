@extends('layouts/main')

@section('content')
	
	<section class="vh-100">
  	<div class="container py-5 ">
  	 <div class="container">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-12 mb-4 mb-lg-0">
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-dark mt-3">
              <img
                src=" /images/{{ $user->foto }}" alt="..." class="img-fluid my-2"
                style="width: 350px; height: 350px; overflow: hidden;">
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Nama Lengkap</h6>
                    <p class="text-muted">{{$user->nama}}</p>
                  </div>
                 <div class="col-6 mb-3">
                    <h6>Tanggal Lahir</h6>
                    <p class="text-muted">{{$user->tanggal_lahir}}</p>
                  </div>
                </div>
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Jenis Kelamin</h6>
                    <p class="text-muted">{{$user->jenisKelamin}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>No. Hp</h6>
                    <p class="text-muted">{{$user->noHp}}</p>
                  </div>
                </div>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted">{{$user->email}}</p>
                  </div>
                   <div class="col-6 mb-3">
                    <a href="/user/edit/{{$user->id}}" class="btn btn-warning">Edit Profil</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection