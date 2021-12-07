@extends('layouts/main')

@section('content')

<div class="container mt-5">

		<div class="row">
			@foreach($history as $tv)
			<p>{{ $tv->daftar_tvshow->id_tvshow}}</p>
			@endforeach
		</div>

</div>

@endsection