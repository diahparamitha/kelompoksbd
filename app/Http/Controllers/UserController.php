<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('user.login', [
            'title' => 'halaman login'
        ]);
    }

    public function register()
    {
        return view('user.register', [
            'title' => 'halaman daftar'
        ]);
    }

   public function registerAkun(Request $request)
    {
        $regist = $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'jenisKelamin' => 'required',
            'noHp' => 'required | min:12 | max:12',
            'foto' => 'image | file | max:1024',
            'email' => 'required | email | unique:users',
            'password' => 'required | min:6 | max:8',
        ]);

         if($request->hasFile('foto')) {
            // Mengambil gambar dan menyimpannya di folder tujuan dengan nama asli
            $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
            $regist['foto'] = $request->file('foto')->getClientOriginalName();
           
        }

         $regist['password'] = bcrypt($regist['password']);    //Meng-enkripsi password

          User::create($regist);
          //INSERT INTO users ('id', 'nama', 'tanggal_lahir', 'jenisKelamin', 'noHP', 'foto', 'email', 'password') VALUES ($id, $nama, $tanggal_lahir, $jenisKelamin, $noHP, $foto, $email, $password) WHERE 'email' != users['email']
          return redirect('/login')->with('login', ' Berhasil daftar, Silahkan Login!');
        
    }

     public function loginAkun(Request $request) 
    {
         $auth = $request->validate([
            'email' => 'required | email',
            'password' => 'required',
        ]);

        if(Auth::attempt($auth)) {  //Jika data yang diinput sesuai
            $request->session()->regenerate();
            
            return redirect()->intended('/'); //diarahkan ke halaman dashboard
        }

        return back()->with('gagal', 'login gagal!'); //gagal login balik ke halaman login lagi dan tampilkan pesan kesalahan
    }

         public function detail($id)
       {
             $users = User::find($id);

            return view('user.detail', [
                'user' => $users,
                'title' => 'detail profil']);

            //SELECT * FROM users WHERE 'id' = users['id']
       }

        public function logoutAkun(Request $request) //untuk logout
       {
            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/');   //diarahkan ke halaman utama
       }

       public function edit($id) 
      {
            // Mengambil data dari database berdasarkan id yang dipilih lalu membuka halaman update
            $users = User::find($id);

            return view('user.update', [
                'users' => $users,
                'title' => 'edit profil']);

            //SELECT * FROM users WHERE id = $users
        }

         public function update(Request $request, $id)
       {
           // Memilih data dari database berdasarkan id dan memperbarui data dengan fungsi update()
        // lalu kembali ke halaman beranda
            $users = User::find($id);
            $users->update($request->validate([
                'nama' => 'required',
                'tanggal_lahir' => 'required',
                'jenisKelamin' => 'required',
                'noHp' => 'required | min:12 | max:12',
                'foto' => 'image | file | max:1024',
                'email' => 'required | email',
            ]));
            if($request->hasFile('foto')) {
            // Mengambil gambar dan menyimpannya di folder tujuan dengan nama asli
            $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
            $users->foto = $request->file('foto')->getClientOriginalName();
            $users->save();

            //UPDATE users SET id = $users
        }
            return redirect('/')->with('edit', ' Profil berhasil diedit!');
       }

       public function delete($id)
       {
            $user = User::find($id);
            $user->delete();
            //DELETE users WHERE id = $user

            return redirect('/admin')->with('delete', 'akun user berhasil dihapus');
       }


}
