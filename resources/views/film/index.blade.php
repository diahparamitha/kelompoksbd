@extends('layouts/main')

@section('content')

<div class="container mt-5">
		<div class="row">
			@foreach($film as $film)
			<div class="col-md-3 mb-3 px-5">
				<div class="card " style= "height: 250px; width: 185px;">
					<div class="position-absolute px-2 py-1" style="background-color: lightcoral;">{{ $film->daftar_menu->nama_menu}}</div>
					<a href="/film-info/{{ $film->id_film }}">
						 <img src="{{ $film->cover_film }}" class="img-fluid" alt="{{ $film->judul_film }}">
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