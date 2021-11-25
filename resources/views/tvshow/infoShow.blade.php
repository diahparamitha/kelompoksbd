@extends('layouts/main')

@section('content')

	<div class="container mt-5">
		<table align="center" width=800px>
		<tr>
		    <td rowspan="2"> <img src="{{ $tvshow->cover_tvshow}}" alt="{{ $tvshow->judul_tvshow}}" width="185" height="278"> </td>  
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
		                <span class="ml-1">{{ $tvshow->batasan_umur_film}}</span>
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
		    </td>
		</tr>
		<tr>
			<td><a href="#" class="btn btn-primary">Daftarku</a></td>
		</tr>
		</table>
	</div>
	
@endsection