<?php
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CostumerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransaksiController;
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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::resource('barang', BarangController::class);
    Route::resource('supplier', SupplierController::class);
    Route::resource('costumer', CostumerController::class);
    Route::resource('transaksi', TransaksiController::class);
});

Route::get('/test', function () {
    return view('customer.store');
});

Route::group(['prefix' => 'member', 'middleware' => ['auth', 'role:member']], function () {
    Route::get('/', function () {
        return view('customer.user');
    });

});
