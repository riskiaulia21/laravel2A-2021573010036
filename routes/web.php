<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 1. Route Bawaan Laravel
Route::get('/', function () {
    return view('welcome');
});

// 2. Membuat Route
// Route::get('/hello',function(){
//     return 'Hello World';
// });

// Route::get('/belajar',function(){
//     echo '<h1>Hello World</h1>';
//     echo '<p>Sedang belajar Laravel</p>';
// });

// Route::get('/mahasiswa/profil/coba',function(){
//     echo '<h2 style="text-align: center"><u>Welcome Profil Coba</u></h2>';
// });

// // 3. Route Parameter
// Route::get('/mahasiswa/{nama}',function($nama){
//     return "Tampilkan data mahasiswa bernama $nama";
// });

// // 4. Route Parameter dengan 2 Parameter
// Route::get('/stok_barang/{jenis}/{merek}',function($jenis,$merek){
//     return "Cek sisa stok untuk $jenis $merek";
// });

// Route::get('/stok_barang/{jenis}/{merek}',function($a,$b){
//     echo "Cek sisa stok untuk $a $b";
// });


// // 5. Route dengan Optional Parameter
// Route::get('/stok_barang/{jenis?}/{merek?}',function($a='smartphone',$b='samsung'){
//     return "Cek sisa stok untuk $a $b";
// });

// // 6. Route Parameter dengan Regular Expression
// Route::get('/user/{id}', function ($id) {
//     return "Tampilkan user dengan id = $id";
// });

// Route::get('/user/{id}',function($id){
//     return "Tampilkan user dengan id =  $id";
// })->where('id','[0-9]+');

// Route::get('/user/{id}',function($id){
//     return "Tampilkan user dengan id = $id";
// })->where('id','[A-Z]{2}[0-9]+');

// // 7. Route Redirect
// Route::get('/hubungi-kami',function(){
//     return "<h1>Hubungi Kami</h1>";
// });

// Route::redirect('/contact-us','/hubungi-kami');

// // 8. Route Group
// Route::get('/admin/mahasiswa',function(){
//     return "<h1>Daftar Mahasiswa</h1>";
// });
// Route::get('/admin/dosen',function(){
//     return "<h1>Daftar Dosen</h1>";
// });
// Route::get('/admin/karyawan',function(){
//     return "<h1>Daftar Karyawan</h1>";
// });

// Route::prefix('/admin')->group(function(){
//     Route::get('/mahasiswa',function(){
//         echo "<h1>Daftar Mahasiswa</h1>";
//     });
//     Route::get('/dosen',function(){
//         echo "<h1>Daftar Dosen</h1>";
//     });
//     Route::get('/karyawan',function(){
//         echo "<h1>Daftar Karyawan</h1>";
//     });
// });

// // 9. Route Fallback
// Route::fallback(function(){
//     return "Maaf, alamat tidak ditemukan";
// });

// // 10. Route Priority
// Route::get('/buku/1',function(){
//     return "Buku ke-1";
// });
// Route::get('/buku/1',function(){
//     return "Buku saya ke-1";
// });
// Route::get('/buku/1',function(){
//     return "Buku kita ke-1";
// });

// Route::get('/buku/{a}',function($a){
//     return "Buku ke-$a";
// });
// Route::get('/buku/{b}',function($b){
//     return "Buku saya ke-$b";
// });
// Route::get('/buku/{c}',function($c){
//     return "Buku kita ke-$c";
// });

// Route::get('mahasiswa/andi',function(){
//     echo "Halaman mahasiswa andi";
// });
// Route::get('/mahasiswa/andi',function(){
//     echo "Halaman mahasiswa andi";
// });

// /* 11.Melihat Daftar Route
//     Bisa buka terminal di VSCode(pilih menu Terminal -> New Terminal), Lalu jalankan perintah php artisan route::list dari jendela terminal di sisi bawah.
// */

Route::get('/home', function () {
    return view('halaman_home');
});

Route::get('/mahasiswa', function () {
    return View::make('mahasiswa');
});

Route::get('/mahasiswa', function () {
    return view('kampus/mahasiswa');
});

//mengirim data ke view sebagai argumen
// Route::get('/mahasiswa', function () {
//     return view('kampus.mahasiswa',["mahasiswa01"=>"Rizki Aulia Pratama"]);
// });


//mengirim data ke view sebagai argumen dengan lebih banyak data
// Route::get('/mahasiswa', function () {
//     return view('kampus.mahasiswa',
//     ["mahasiswa01"=>"Rizki Aulia Pratama",
//     "mahasiswa02"=>"muhammad arhan",
//     "mahasiswa03"=>"rajesh",
//     "mahasiswa04"=>"dominic toretto"
// ]);
// });

//mengirimkan data dengan foreach
// Route::get('/mahasiswa', function () {
//     $arrMahasiswa = ["Rizki Aulia","Muhammad Zaki","Fadhil Akram","Muhammad Rajish Kumar"];
//     return view('kampus.mahasiswa',['mahasiswa'=>$arrMahasiswa]);
// });

//mengirimkan data dengan method width
Route::get('/mahasiswa', function () {
    $mahasiswa01 = "indra kenz";
    return view('kampus.mahasiswa')->with(compact('mahasiswa01'));
});

//mengirimkan banyak data dengan method width
// Route::get('/mahasiswa', function () {
//     $arrMahasiswa = ["Rizki Aulia","Muhammad Zaki","Fadhil Akram","Muhammad Rajish Kumar"];
//     return view('kampus.mahasiswa')->with('mahasiswa',$arrMahasiswa);
// });

//jobsheet 3

//nomor 1
Route::get('/mahasiswa', function () {
    $nama = 'Rizki Aulia';
    $nilai = [80,64,30,76,95];
    return view('mahasiswa',compact('nama','nilai'));
});

