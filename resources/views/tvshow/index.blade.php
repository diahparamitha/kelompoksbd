@extends('layouts/main')

@section('content')

<div class="container mt-5">

	<!-- Untuk searching -->
	<div class="row justify-content-end mt-3 mb-3">
		<div class="col-md-4">
			<form class="d-flex" action="/tvshow">
		    <input class="form-control me-2" type="text" placeholder="Search" name="judul_tvshow" value="{{ request('judul_tvshow') }}">
		    <button class="btn btn-info" type="submit">Search</button>
		  </form>
		</div>
	</div>


		<div class="row">
			@foreach($tvshow as $tv)
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
		</div>

		<div class="d-flex justify-content-end">
		{{ $tvshow->links() }}	<!-- untuk pagination -->
	</div>
</div>
	
@endsection


 