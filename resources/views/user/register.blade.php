@extends('layouts/main')

@section('content')

	<div class="container my-3">
		<main class="form-registration">
		<h1 class="h3 mb-3 text-center" style="font-style: oblique;">Daftar</h1>
		
		  <form action="/registerAkun" method="post" enctype="multipart/form-data">
		  	@csrf <!-- untuk mengenerate token agar user bisa masuk -->
		  	<div class="form-floating">
		      <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="nama" required="" value="{{ old('nama') }}">
		      <label for="nama">Nama lengkap</label>
			      @error('nama') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
				      <div class="invalid-feedback">
				      	{{ $message }}
				      </div>
			      @enderror
		    </div>
		    <div class="form-floating">
		      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required="" value="{{ old('email') }}">
		      <label for="email">Email</label>
		        @error('email')
				      <div class="invalid-feedback">
				      	{{ $message }}
				      </div>
			      @enderror
		    </div>
		    <div class="form-floating">
		      <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" placeholder="2002-12-31" required="" value="{{ old('tanggal_lahir') }}">
		      <label for="tanggal_lahir">Tanggal Lahir</label>
			      @error('tanggal_lahir') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
				      <div class="invalid-feedback">
				      	{{ $message }}
				      </div>
			      @enderror
		    </div>
		     <div class="mt-3 mb-3">
            <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" name="jenisKelamin" >
              <option value="hidden" selected>pilih</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
          </div>
		  	<div class="form-floating">
		      <input type="number" name="noHp" class="form-control @error('noHp') is-invalid @enderror" id="noHp" placeholder="+2540585458329" required="" value="{{ old('noHp') }}">
		      <label for="noHp">No. Telepon</label>
		        @error('noHp')
				      <div class="invalid-feedback">
				      	{{ $message }}
				      </div>
			      @enderror
		    </div>
		    <div class="form-floating">
		      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="password" required="">
		      <label for="password">Password</label>
		        @error('password')
				      <div class="invalid-feedback">
				      	{{ $message }}
				      </div>
			      @enderror
		    </div>
		    <div class="mt-3">
            <label for="foto" class="form-label">Foto profil</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control @error('foto') is-invalid @enderror " type="file" id="foto" name="foto"onchange="previewImage()">
             @error('foto') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

		    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Daftar</button>
		  </form>
		  <small class=" d-block text-center mt-3">Sudah punya akun? <a href="/login">Login</a></small>
		</main>
	</div>

	<script>

      function previewImage() {
        const image = document.querySelector('#foto');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }
    </script>

@endsection