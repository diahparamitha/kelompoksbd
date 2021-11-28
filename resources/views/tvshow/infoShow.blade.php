@extends('layouts/main')

@section('content')

	<div class="container mt-5">
		<table align="center" width=800px>
		<tr>
		    <td rowspan="2"> 
		    	@if($tvshow->cover_tvshow)
				<img src= "/images/tvshow/{{ $tvshow->cover_tvshow }}" style= "height: 250px; width: 185px; overflow: hidden;" alt="{{ $tvshow->judul_tvshow}}">
				@else
				 <img src="{{ $tvshow->cover_tvshow }}" class="img-fluid" alt="{{ $tvshow->judul_tvshow }}">
				 @endif 
			</td>  
		</tr>
		<tr>
		    <td></td>
		    <td></td>
		    <td></td>
		    <td></td>
		    <td></td>
		    <td>
		        <h2 class="text-4xl font-semibold">{{ $tvshow->judul_tvshow}}</h2>
		            <div class="flex items-center text-gray-400 text-sm">
		                <span class="ml-1">{{ $tvshow->batasan_umur_tvshow}}</span>
		                <span class="mx-2">|</span>
		                <span>{{ $tvshow->daftar_genre->nama_genre}}</span>
		            </div>
		            <!-- <p>
		            <div class="p-2 col-2 col-md-2 col-lg-2 bg-secondary text-white">Mulai Nonton</div>
		            </p> -->
		        <p>
		            <p class="desc">
		               {{ $tvshow->description_tvshow}}
		            </p>
		        </p>
		        <p> <strong>Sutradara :</strong> {{ $tvshow->daftar_director->nama_director}}</p>
		        <p> <strong>Pemain :</strong> {{ $tvshow->daftar_pemain->nama_pemain }} </p>
		        <p> <strong>Jumlah episode :</strong> {{$tvshow->daftar_episode->no_episode}} </p>
		        <a href="/daftarku" class="btn btn-primary">Daftarku</a>
		    </td>
		</tr>
		</table>
	</div>
	
@endsection