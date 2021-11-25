@extends('layouts/main')

@section('content')

<div class="container mt-5">
        <div class="carousel slide" data-ride="carousel" id="multi_item">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row">
          <div class="col-sm">
            <img style="max-height: 350px; overflow: hidden;" src="{{ asset('img/tsr.jpg') }}" width="185" height="278" alt="1 slide">
          </div>
          <div class="col-sm">
            <a href="/tv-show-info/"><img style="max-height: 350px; overflow: hidden;" src="{{ asset('img/terminal 2.jpg') }}" width="185" height="278" alt="2 slide"></a>
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