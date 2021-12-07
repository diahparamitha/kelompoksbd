@extends('layouts/main')

@section('content')

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

	<h3 align="center"><strong>Films</strong></h3><hr>

	<!-- Untuk searching -->
	<div class="row justify-content-end mt-3 mb-3">
		<div class="col-md-4">
			<form class="d-flex" action="/film">
		    <input class="form-control me-2" type="text" placeholder="Search" name="judul_film" value="{{ request('judul_film') }}">
		    <button class="btn btn-info" type="submit">Search</button>
		  </form>
		</div>
	</div>

		<div class="row">
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

		<div class="d-flex justify-content-end">
		{{ $films->links() }}	<!-- untuk pagination -->
	</div>
</div>
	
@endsection 