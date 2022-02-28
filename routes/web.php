<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('biodata', function () {
    $bio=[
        'nama'=>'fauzi',
        'umur'=>'17',
        'telepon'=>'083822061837',
        'pekerjaan'=>'pelajar'

    ];
    return view('biodata',$bio);
});

Route::get('deskripsi', function () {
    $Data=[
        'penulis'=>'fauzi',
        'judul'=>'Deskripsi',
        'isi'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, beatae quidem laborum porro tempora eaque, at in aperiam architecto reprehenderit iure quas eius ut error magni corrupti exercitationem nostrum aliquid?'

    ];
    return view('deskripsi',$Data);
});

Route::get('/home', [HomeController::class, 'showgreeting']);

Route::get('/biodata', function () {
    $Data=[
        'nama'=>'Fauzi Rahman Febriansyah',
        'lahir'=>'Bandung, 13 Februari 2004',
        'hobi'=>'menonton film',
        'jk'=>'laki-laki',
        'agama'=>'Islam',
        'alamat'=>'Kp. Margamulya RT01/01 No.6',
        'telp'=>'083822061837',
        'email'=>'faujirahman1302@gmail.com',
        'photo'=>'../img/fauzi.jpg'

    ];
    return view('biodata',$Data);
});

Route::get('/', [BiodataController::class,'index']);
Route::get('/list', [BiodataController::class,'index'])->name('list');
Route::get('/form_siswa', [BiodataController::class,'create'])->name('form_siswa');
Route::post('/store_siswa', [BiodataController::class,'store']);
Route::get('/edit/{id}', [BiodataController::class,'edit'])->name('edit_siswa');
Route::put('/update/{id}', [BiodataController::class,'update'])->name('update_siswa');
Route::delete('/delete/{id}', [BiodataController::class, 'destroy'])->name('destroy-siswa');
Route::get('/bio/{id}', [BiodataController::class, 'show'])->name('show-bio');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
