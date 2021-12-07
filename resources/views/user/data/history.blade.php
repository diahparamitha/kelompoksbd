@extends('layouts/main')

@section('content')

<div class="container mt-5">

		<div class="row">
			@foreach($history as $film)
			<div class="col-md-3 mb-3 px-5">
				<div class="card " style= "height: 250px; width: 185px; overflow: hidden;">
					<a href="/film-info/{{ $film->id_film }}">
						<img src="/images/film/{{ $film->cover_film }}" class="img-fluid" alt="{{ $film->judul_film}}">
					</a>
				</div>
				 <div class="card-body mt-3">
				    <h5 class="card-title"><a href="/film-info/{{ $film->id_film }}" class="text-decoration-none text-dark">{{ $film->judul_film}}</a></h5>
				  </div>
			</div>
			@endforeach
			@foreach($history as $tvshow)
			<div class="col-md-3 mb-3 px-5">
				<div class="card " style= "height: 250px; width: 185px; overflow: hidden;">
					<a href="/tvshow-info/{{ $tvshow->id_tvshow }}">
						<img src="/images/tvshow/{{ $tvshow->cover_tvshow }}" class="img-fluid" alt="{{ $tvshow->judul_tvshow}}">
					</a>
				</div>
				 <div class="card-body mt-3">
				    <h5 class="card-title"><a href="/tvshow-info/{{ $tvshow->id_tvshow }}" class="text-decoration-none text-dark">{{ $tvshow->judul_tvshow}}</a></h5>
				  </div>
			</div>
			@endforeach
		</div>

</div>

@endsection