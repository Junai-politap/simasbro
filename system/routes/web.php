<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\TimController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormulirController;

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

// Route::get('/', [FormulirController::class, 'index']);
// Route::post('store-formulir', [FormulirController::class, 'store']);
// Route::get('selesai', [FormulirController::class, 'selesai']);

// Route::get('/', function () {
//     return view('home/index');
// });


// Route Super Admin

Route::group( [ 'middleware' => 'auth' ], function(){
	Route::get('page404', [AdminController::class, 'index']);
	Route::post('storejadwal', [AdminController::class, 'storejadwal']);
	Route::get('register', [AdminController::class, 'register']);

	Route::get('page-mahasiswa', [AdminController::class, 'indexmahasiswa']);

	Route::get('page-member',[MemberController::class, 'index']);
	Route::post('/memberstore',[MemberController::class, 'memberstore']);
	Route::post('/storemember',[MemberController::class, 'storemember']);
	Route::post('/konfir/{id}',[MemberController::class, 'konfir']);
	Route::get('/member/edit/{mitra}', [MemberController::class, 'edit']);
	Route::put('/memberupdate/{id}',[MemberController::class, 'memberupdate']);
	Route::get('/edit-member/{id}',[MemberController::class, 'memberedit']);
	Route::get('/memberdelete/{mitra}',[MemberController::class, 'memberdelete']);
	Route::get('/deletemember/{id}',[MemberController::class, 'deletemember']);
	Route::get('/member/show/{id}', [MemberController::class, 'show']);
	Route::get('/member/detail/{id}', [MemberController::class, 'detail']);

	Route::post('/storeinternal', [MemberController::class, 'storeinternal']);
	Route::post('/storeeksternal', [MemberController::class, 'storeeksternal']);

	Route::get('page-event',[EventController::class, 'pageevent']);
	Route::post('/storeevent',[EventController::class, 'storeevent']);
	Route::get('/edit-event/{id}',[EventController::class, 'editevent']);
	Route::post('/updateevent/{id}',[EventController::class, 'updateevent']);
	Route::get('/deleteevent/{id}',[EventController::class, 'deleteevent']);

	Route::get('page-berita',[BeritaController::class, 'pageberita']);
	Route::post('/storeberita',[BeritaController::class, 'storeberita']);
	Route::get('/edit-berita/{id}',[BeritaController::class, 'editberita']);
	Route::post('/updateberita/{id}',[BeritaController::class, 'updateberita']);
	Route::get('/deleteberita/{id}',[BeritaController::class, 'deleteberita']);

	Route::get('page-tim',[TimController::class, 'pagetim']);
	Route::post('/storetim',[TimController::class, 'storetim']);
	Route::get('/tim/edit/{id}',[TimController::class, 'edit']);
	Route::post('/tim/update/{id}',[TimController::class, 'update']);
	Route::get('/tim/delete/{id}',[TimController::class, 'delete']);

	Route::get('page-proyek', [ProyekController::class, 'index']);
	Route::post('/setuju/{id}', [ProyekController::class, 'setuju']);
	Route::post('/tolak/{id}', [ProyekController::class, 'tolak']);
	Route::get('proyek/{id}', [ProyekController::class, 'show']);
	Route::get('proyek/show-berjalan/{id}', [ProyekController::class, 'showberjalan']);
	Route::get('proyek/show-selesai/{id}', [ProyekController::class, 'showselesai']);

	Route::get('/berjalan', [ProyekController::class, 'berjalan']);
	Route::get('/selesai', [ProyekController::class, 'selesai']);
	Route::get('projects-ditolak', [ProyekController::class, 'ditolak']);
    Route::get('delete-project/{id}', [ProyekController::class, 'deleteproject']);

	Route::get('/evaluasi/{id}', [ProyekController::class, 'evaluasi']);
	Route::put('/storeborang/{id}', [ProyekController::class, 'storeborang']);

    Route::post('store-progress', [ProyekController::class, 'storeprogress']);
});


// End Route Super Admin

// Route Home

Route::get('/', [HomeController::class, 'index']);
Route::get('berita', [HomeController::class, 'beritaPage']);
Route::get('pbl', [HomeController::class, 'PBLPage']);
Route::get('event', [HomeController::class, 'eventPage']);
Route::get('tim-pbl', [HomeController::class, 'timPage']);
Route::get('/show-tim/{id}', [HomeController::class, 'showtim']);
Route::get('contact', [HomeController::class, 'contactPage']);
Route::get('expo', [HomeController::class, 'expoPage']);

Route::get('buat-proyek', [HomeController::class, 'buat_proyek']);
Route::get('proyek-baru', [HomeController::class, 'proyek_baru']);
Route::get('proyek-saat-ini', [HomeController::class, 'proyek_saat_ini']);

Route::get('mitra', [HomeController::class, 'mitra']);


// End Route Home


// Route Mitra

Route::group(['guard' => 'mitra-page'], function () {

	Route::get('mitra-page', [MitraController::class, 'index']);
	Route::get('/edit-mitra/{id}', [MitraController::class, 'editmitra']);
	Route::put('/updatemitra/{id}', [MitraController::class, 'updatemitra']);
	Route::get('project-baru', [MitraController::class, 'project_baru']);
	Route::get('/buat-project', [MitraController::class, 'buatproject']);
	Route::get('show-project/{id}', [MitraController::class, 'showproject']);
	Route::get('/edit-project/{id}', [MitraController::class, 'editproject']);
	Route::put('/updateproject/{id}', [MitraController::class, 'updateproject']);
	Route::get('/deleteproject/{id}', [MitraController::class, 'deleteproject']);
	Route::post('/projectstore', [MitraController::class, 'ProjectStore']);
	Route::get('project-berjalan', [MitraController::class, 'project_berjalan']);
	Route::get('/detail/{id}', [MitraController::class, 'detail']);
	Route::get('project-selesai', [MitraController::class, 'project_selesai']);
    Route::get('mitra-evaluasi/{id}', [MitraController::class, 'evaluasi']);
    Route::get('progres/{id}', [MitraController::class, 'progres']);


	Route::get('master', [MitraController::class, 'master']);
	Route::post('storetipe', [MitraController::class, 'storetipe']);
	Route::get('/master-tipe/{id}', [MitraController::class, 'mastertipe']);
	Route::get('/master-hki/{id}', [MitraController::class, 'masterhki']);
	Route::post('storehki', [MitraController::class, 'storehki']);

});


// End Route Mitra



// Route::get ('/test', [LoginController::class, 'test']);
// Route::get ('login', [LoginController::class, 'login'])->name('login');
// Route::post ('loginproses', [LoginController::class, 'loginproses']);
// Route::get ('logout', [LoginController::class, 'logout']);


Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'LoginProses']);
Route::get('logout', [AuthController::class, 'logout']);
