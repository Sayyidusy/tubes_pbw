<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServisController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\DetailServisController;
use App\Http\Controllers\UserPasswordController;
use App\Http\Controllers\UserTransaksiController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminTestimoniController;
use App\Http\Controllers\Admin\AdminKonsultasiController;
use App\Http\Controllers\Admin\AdminDetailServisController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/user-profile', UserProfileController::class);
    Route::resource('user-password', UserPasswordController::class);
    Route::resource('/user-transaksi', UserTransaksiController::class);

    Route::resource('/konsultasi', KonsultasiController::class);

    //detail komponen
    Route::get('/detail-servis/{id}', [DetailServisController::class, 'detail']);
    //  testimoni
    Route::resource('/testimoni', TestimoniController::class);

    //link wa

    
});



require __DIR__.'/auth.php';

// Admin Route
Route::prefix('/admin')->group(function() {
    Route::match(['get', 'post'], 'login', [AdminController::class, 'login'])->middleware('adminGuest');
    Route::middleware('admin')->group(function() {
        Route::get('dashboard',[AdminController::class, 'dashboard']);
        Route::get('logout', [AdminController::class, 'logout']);
        Route::match(['get','post'], 'settings', [AdminController::class, 'updateAdminPassword'])->name('updateAdminPassword');
        Route::post('settings/updateAdminImage', [AdminController::class, 'updateAdminImage'])->name('updateAdminImage');
  
        // Admin Users Route
        Route::get('users', [AdminUserController::class, 'index']);
        Route::get('user/getAllUsers', [AdminUserController::class,
        'getAllUsers']);
        Route::post('user/update', [AdminUserController::class, 'update'])->name('updateAdminUser');
        Route::resource('user', AdminUserController::class);

        //admin Detail Servis Route
        Route::get('detail-servis',[ AdminDetailServisController::class, 'index']);
        Route::get('detail-servis/getAllDetailServis', [AdminDetailServisController::class, 'getAllDetailServis']);

        Route::post('detail-servis/update', [AdminDetailServisController::class, 'update'])->name('updateAdminDetailServis');
        Route::get('detailServis/{id}/edit',[AdminDetailServisController::class, 'edit'])->name('editAdminDetailServis');
        Route::post('detail-servis/store', [AdminDetailServisController::class, 'store'])->name('storeAdminDetailServis');
        Route::post('detail-servis/destroy', [AdminDetailServisController::class, 'destroy'])->name('destroyAdminDetailServis');


        //admin konsultasi
        Route::get('konsultasi', [AdminKonsultasiController::class, 'index']);
        Route::get('konsultasi/getAllKonsultasi', [AdminKonsultasiController::class, 'getAllKonsultasi']);

        //admin Testimoni 
        Route::get('testimoni', [AdminTestimoniController::class, 'index']);
        Route::get('testimoni/getAllTestimoni', [AdminTestimoniController::class, 'getAllTestimoni']);
        
      
    });
  });

// Route::get('login', [AdminController::class,'create']);
// Route::post('login',[AdminController::class,'store']);

Route::resource('/servis', ServisController::class);
Route::get('/detail-servis', [DetailServisController::class, 'index'])->name('detail-servis.index');
Route::get('/about', function () {
    return view('about.index');
});