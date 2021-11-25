@extends('layouts/main')

@section('content')

<div class="container">
		<div class="row justify-content-between">
			@foreach($tvshow as $tv)
			<div class="col-md-2 mb-3">
				<div class="card " style= "height: 250px; width: 185px;">
					<a href="/tvshow-info/{{ $tv->id_tvshow }}">
						 <img src="{{ $tv->cover_tvshow }}" class="img-fluid" alt="">
					</a>
				</div>
				 <div class="card-body mt-3">
				    <h5 class="card-title"><a href="/tvshow-info/{{ $tv->id_tvshow }}" class="text-decoration-none text-dark">{{ $tv->judul_tvshow}}</a></h5>
				  </div>
			</div>
			@endforeach
		</div>
	</div>
	
@endsection