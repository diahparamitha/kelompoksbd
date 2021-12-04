@extends('layouts/main')

@section('content')

<div class="container mt-5">

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