<?php /** @noinspection ALL */
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
    return view('accueil');
});
Auth::routes(['verify' => true]);

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
Route::view('/lesRestaurants', 'lesRestaurants');
Route::view('/accueil', 'accueil');
Route::view('/parrainage', 'parrainage');
Route::view('/commande', 'commande');
Route::view('/compte', 'compte');
Route::get('/lesRestaurants', 'lesRestaurantsController@index')->name('lesRestaurants');
Route::get('/auth/redirect/{provider}', 'SocialAuthFacebookController@redirect');
Route::get('/callback/{provider}', 'SocialAuthFacebookController@callback');
Route::get('/redirect', 'SocialAuthGoogleController@redirect');
Route::get('/callback', 'SocialAuthGoogleController@callback');
Route::get('/restaurant/{restaurant}', 'RestaurantController@index')->name('product.index');
Route::delete('/Restaurant/{product}', 'RestaurantController@destroy')->name('product.remove');
Route::put('/Restaurant/{product}', 'RestaurantController@update')->name('product.update');
Route::get('/addToCart/{product}', 'RestaurantController@addToCart')->name('cart.add');
Route::get('/panier', 'RestaurantController@showCart')->name('cart.show');

//Route::get('/payement', 'RestaurantController@showCart')->name('cart.checkout');

Route::get('/payement', 'RestaurantController@checkout')->name('cart.checkout')->middleware('auth');
Route::post('/charge', 'RestaurantController@charge')->name('cart.charge');
Route::get('/orders', 'OrderController@index')->name('order.index');
Route::view('/email', 'auth.passwords.email');
Route::view('/reset', 'auth.passwords.reset');
Route::view('/newAccueil', 'newAccueil.index');
Route::post('/restaurant/search', 'rechercheController@search')->name('restaurant.search');

Route::post('/coupon', 'CouponsController@store')->name('coupon.store');
Route::delete('/coupon', 'CouponsController@destroy')->name('coupon.destroy');

Route::view('/aPropos', 'aPropos.index');
Route::view('/inscriptionResto', 'inscriptionResto.index');
Route::view('/cityManager', 'cityManager.index');
Route::view('/nousRejoindre', 'nousRejoindre.index');

Route::view('/mentionLegal', 'mentionLegal.index');
Route::view('/confidentialite', 'confidentialite.index');
Route::view('/cookies', 'cookies.index');
Route::view('/CGU', 'CGU.index');

Route::view('/contact', 'contact.index');
Route::view('/FAQ', 'FAQ.index');
Route::view('/order', 'order.index');

Route::view('/maCommande', 'maCommande');
Route::view('/maCommandeError', 'maCommandeError');


Route::group(['middleware' => ['auth', 'admin']], function(){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
});

Route::put('/information/{information}', 'InformationController@update')->name('information.update');
Route::post('/information', 'InformationController@store')->name('information.store');

