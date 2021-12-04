@extends('layouts/main')

@section('content')

@if(session()->has('edit')) 
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        {{ session('edit') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
      </div>
    @endif

 <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://source.unsplash.com/1500x500?Spiderman"  alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://source.unsplash.com/1500x500?Actor"   alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://source.unsplash.com/1500x500?Horror"   alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
     </div>

<div class="container mt-5">
    <div class="row">
      @foreach($tontonan as $tv)
      <div class="col-md-3 mb-3 px-5">
        <div class="card " style= "height: 250px; width: 185px; overflow: hidden;">
          <div class="position-absolute px-2 py-1" style="background-color: lightcoral;">{{ $tv->daftar_menu->nama_menu}}</div>
          <a href="/tvshow-info/{{ $tv->id_tvshow }}">
            <img src="/images/tvshow/{{ $tv->cover_tvshow }}" class="img-fluid" alt="{{ $tv->judul_tvshow}}">
          </a>
        </div>
         <div class="card-body mt-3">
            <h5 class="card-title"><a href="/tvshow-info/{{ $tv->id_tvshow }}" class="text-decoration-none text-dark">{{ $tv->judul_tvshow}}</a></h5>
          </div>
      </div>
      @endforeach
      @foreach($films as $film)
      <div class="col-md-3 mb-3 px-5">
        <div class="card " style= "height: 250px; width: 185px; overflow: hidden;">
          <div class="position-absolute px-2 py-1" style="background-color: lightcoral;">{{ $film->daftar_menu->nama_menu}}</div>
          <a href="/film-info/{{ $film->id_film }}">
             @if($film->cover_film)
            <img src="/images/film/{{ $film->cover_film }}" class="img-fluid" alt="{{ $film->judul_film}}">
            @else
             <img src="https://source.unsplash.com/250x185?Film" class="img-fluid" alt="{{ $film->judul_film }}">
             @endif
          </a>
        </div>
         <div class="card-body mt-3">
            <h5 class="card-title"><a href="/film-info/{{ $film->id_film }}" class="text-decoration-none text-dark">{{ $film->judul_film}}</a></h5>
          </div>
      </div>
      @endforeach
    </div>

</div>

@endsection