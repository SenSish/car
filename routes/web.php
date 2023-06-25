<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InvoceController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\UserInvoiceController;
use App\Http\Controllers\UserProfileController;

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
/*
Route::group(['prefix' => '/'], function()
{
    if ( Auth::check() ) // use Auth::check instead of Auth::user
{
Route::get('/', 'PagesController@logged_in_index');
} else{
    Route::get('/', 'PagesController@guest_index');
}
}); */


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 Route::group(['prefix'=>'admin'],function(){
    Route::group(['middleware'=>'auth','verified'],function(){
        Route::get('/',function(){
            return redirect()->route('user.index');
        });
        Route::resource('city'              , CityController::class);
        Route::resource('invoices'          , InvoceController::class);
        Route::resource('region'            , RegionController::class);
        Route::resource('user'              , UserController::class);
        Route::resource('counters'          , CounterController::class);
        Route::resource('subscriptions'     , SubController::class);
        Route::post('invoices/selectuser'   , [InvoceController::class ,'createinvoice'])->name('invoces.selectuser');
    });
 });

 Route::group(['prefix'=>'user'],function(){
    Route::group(['middleware'=>'auth','verified'],function(){
        Route::get('/',function(){
            return redirect()->route('user.index');
        });
        Route::get('/invoices', UserInvoiceController::class)->name('user.invoices');
        Route::get('/profile',  UserProfileController::class)->name('user.profile');

    });
 });

require __DIR__.'/auth.php';

Auth::routes();
/* Route::group(['middleware'=>'auth','verified'],function(){

}); */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', LogoutController::class,'logout');
/* Route::get('/hash',function ()
{
    $pass='Password';
    $has=Hash::make($pass);
    dd($has);
}); */
