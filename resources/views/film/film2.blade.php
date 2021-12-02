@extends('layouts/main')

@section('content')

	<div class="container mt-5">
		<table align="center" width=800px>
		<tr>
		    <td rowspan="2">
				<img src= "/images/film/{{ $film->cover_film }}" style= "height: 250px; width: 185px; overflow: hidden;" alt="{{ $film->judul_film}}">
			</td> 
		</tr>
		<tr>
		    <td></td>
		    <td></td>
		    <td></td>
		    <td></td>
		    <td></td>
		    <td>
		        <h2 class="text-4xl font-semibold">{{ $film->judul_film}}</h2>
		            <div class="flex items-center text-gray-400 text-sm">
		                <span class="ml-1">{{ $film->batasan_umur_film}}</span>
		                <span class="mx-2">|</span>
		                <span>{{ $film->daftar_genre->nama_genre}}</span>
		            </div>
		            <!-- <p>
		            <div class="p-2 col-2 col-md-2 col-lg-2 bg-secondary text-white">Mulai Nonton</div>
		            </p> -->
		        <p>
		            <p class="desc">
		               {{ $film->description_film}}
		            </p>
		        </p>
		        <p> <strong>Sutradara :</strong> {{ $film->daftar_director->nama_director}}</p>
		        <p> <strong>Pemain :</strong> {{ $film->daftar_pemain->nama_pemain }} </p>
		        <a href="/daftarku" class="btn btn-primary">Daftarku</a>
		    </td>
		</tr>
		</table>
		<div class="container px-3 mt-5">
			<p><strong>Komentar :</strong></p>
		<p> {{ $film->komentar_film }} </p>
		</div>
	</div>
	
@endsection