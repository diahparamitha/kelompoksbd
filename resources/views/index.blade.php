@extends('layouts/main')

@section('content')

@if(session()->has('edit')) 
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        {{ session('edit') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
      </div>
    @endif

 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://source.unsplash.com/500x250?Film" class="d-block w-100"  alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/500x250?Movie" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/500x250?Soccer" class="d-block w-100" alt="...">
      
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container mt-5">
      <h3>Film</h3>
        <div class="carousel slide" data-ride="carousel" id="multi_item">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row">
          <div class="col-sm">
            <img style="max-height: 350px; overflow: hidden;" src="{{ asset('img/tsr.jpg') }}" width="185" height="278" alt="1 slide">
          </div>
          <div class="col-sm">
            <a href="/film/"><img style="max-height: 350px; overflow: hidden;" src="{{ asset('img/terminal 2.jpg') }}" width="185" height="278" alt="2 slide"></a>
          </div>
          <div class="col-sm">
            <a href="/film/2"><img style="max-height: 350px; overflow: hidden;" src="{{ asset('img/cmifyc.jpg') }}" width="185" height="278" alt="3 slide"></a>
          </div>
          <div class="col-sm">
            <img style="max-height: 350px; overflow: hidden;" src="{{ asset('img/tgm.jpg') }}" width="185" height="278" alt="4 slide">
          </div>
          <div class="col-sm">
            <img style="max-height: 350px; overflow: hidden;" src="{{ asset('img/fg2.jpg') }}" width="185" height="278" alt="5 slide">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-sm">
            <img style="max-height: 350px; overflow: hidden;" src="{{ asset('img/mz1.jpg') }}" width="185" height="278" alt="1 slide">
          </div>
          <div class="col-sm">
            <img style="max-height: 350px; overflow: hidden;" src="{{ asset('img/6under.jpg') }}" width="185" height="278" alt="2 slide">
          </div>
          <div class="col-sm">
            <img style="max-height: 350px; overflow: hidden;" src="{{ asset('img/allegiant.jpg') }}" width="185" height="278" alt="3 slide">
          </div>
          <div class="col-sm">
            <img style="max-height: 350px; overflow: hidden;" src="{{ asset('img/divergent.jpg') }}" width="185" height="278" alt="4 slide">
          </div>
          <div class="col-sm">
            <img style="max-height: 350px; overflow: hidden;" src="{{ asset('img/si.jpg') }}" width="185" height="278" alt="5 slide">
          </div>
      </div>
    </div>
    
   <button class="carousel-control-prev" type="button" data-bs-target="#multi_item" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#multi_item" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
      </div>
    </div>

@endsection