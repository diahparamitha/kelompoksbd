@extends('admin/layouts/main')

@section('content')

@include('layouts/partials/navbar')

	<div class="container">

	  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	        <h1 class="h2">Welcome admin {{ auth()->user()->nama }} !</h1>
	      </div>
	</div>

@include('layouts/partials/footer')
	
@endsection