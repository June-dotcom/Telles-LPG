<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

use App\Models\User;
use App\Models\User_profiles;

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
    return view('telleshomepage');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});
Route::group(['middleware' => ['auth']], function() {
    Route::get('/myaccount', 'App\Http\Controllers\myAccount@index');
    // for admin only
    Route::get('/adminpanel', 'App\Http\Controllers\adminPanelController@index');
    Route::get('/orders', 'App\Http\Controllers\adminPanelController@orders');
    Route::get('/products', 'App\Http\Controllers\adminPanelController@products');
    Route::get('/customers', 'App\Http\Controllers\adminPanelController@customers');
    // adminpanel order management
    Route::get('orders/actions/Pending/{invoice_id}', 'App\Http\Controllers\orderMgmt@setPending');
    Route::get('orders/actions/Done/{invoice_id}', 'App\Http\Controllers\orderMgmt@setDone');
    Route::get('orders/actions/Deleted/{invoice_id}', 'App\Http\Controllers\orderMgmt@setDeleted');

    Route::get('/order_type_confirmation/{gastype}', 'App\Http\Controllers\orderController@index');
    Route::post('/order_type_confirmation/{gastype}/submit', 'App\Http\Controllers\orderController@request_order'); 
// admin panel zone
    Route::post('/customers-edit','App\Http\Controllers\myAccount@admin_editAccForms'); 
    Route::post('/done-edit', 'App\Http\Controllers\myAccount@admin_editAccConf');

});



Route::get('/auth/callback', function () {
    $user = Socialite::driver('google')->user();
    $user_db = User::where('email', '=', $user->getEmail())->first();
    if(!$user_db){
        $user_db = new User();
        $user_db->name =  $user->getName();
        $user_db->user_level = 'Customer';
        $user_db->email = $user->getEmail();
        $user_db->provider_id = $user->getId();
        $user_db->avatar = $user->getAvatar();
        $user_db->save();

        Auth::login($user_db);
        $user_profile_db = new User_profiles();
        $user_profile_db->user_id = Auth::id();
        $user_profile_db->save();

    }else{
        Auth::login($user_db);

    }

    return redirect()->route('home');
});

Route::get('/facebook/auth/redirect', function () {
    return Socialite::driver('facebook')->redirect();
});

Route::get('/facebook/auth/callback', function () {
    $user = Socialite::driver('facebook')->user();
    $user_db = User::where('email', '=', $user->getEmail())->first();
    if(!$user_db){
        $user_db = new User();
        $user_db->name =  $user->getName();
                $user_db->user_level = 'Customer';

        $user_db->email = $user->getEmail();
        $user_db->provider_id = $user->getId();
        $user_db->avatar = $user->getAvatar();
        $user_db->save();
    }

    Auth::login($user_db);
    return redirect()->route('home');
});