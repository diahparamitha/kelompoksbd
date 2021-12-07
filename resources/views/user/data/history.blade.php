@extends('layouts/main')

@section('content')

<div class="container mt-5">

		<div class="row">
			@foreach($history as $tv)
			<div class="col-md-3 mb-3 px-5">
				<div class="card " style= "height: 250px; width: 185px; overflow: hidden;">
				 <div class="position-absolute px-2 py-1" style="background-color: lightcoral;">{{ $tv->daftar_tvshow->daftar_menu->nama_menu}}</div>
					<a href="/tvshow-info/{{ $tv->daftar_tvshow->id_tvshow }}">
						<img src="/images/tvshow/{{ $tv->daftar_tvshow->cover_tvshow }}" class="img-fluid" alt="{{ $tv->daftar_tvshow->judul_tvshow}}">
					</a>
				</div>
				 <div class="card-body mt-3">
				    <h5 class="card-title"><a href="/tvshow-info/{{ $tv->daftar_tvshow->id_tvshow }}" class="text-decoration-none text-dark">{{ $tv->daftar_tvshow->judul_tvshow}}</a></h5>
				  </div>
			</div>
			@endforeach
		</div>

</div>

@endsection