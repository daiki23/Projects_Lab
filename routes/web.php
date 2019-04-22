<?php

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




Route::get('/','HomeController@index' 
    );

Route::get('/home','HomeController@index' 
    );

Route::get('/events','HomeController@events' 
    );

Route::get('/review','HomeController@review' 
    );

Route::get('/contacts','HomeController@contacts' 
    );


// khusuzon insert admin & view admin

Route::post('/admin/storeAdmin', "DaftarController@store");
Route::get('/admin/viewAdmin', 'DaftarController@show');
Route::get('/admin/deleteAdmin/{id}', 'DaftarController@destroy');
Route::get('/admin/insertAdmin', 'DaftarController@insert');



//khusuzon contact
Route::get('/contact', 'ContactController@index');
Route::post('/storeContact', "ContactController@store");
Route::get('/admin/lihatMasukkan/{id_masukkan}', 'ContactController@show');
Route::get('/admin/deleteMasukkan/{id_masukkan}', 'ContactController@destroy');
Route::get('/admin/viewMasukkan', 'ContactController@viewMasukkan');

//khusuzon wishlist
Route::get('/wishlist', 'WishlistController@index');
Route::post('/storeWishlist', "WishlistController@store");
Route::get('/admin/lihatWishlist/{id_wishlist}', 'WishlistController@show');
Route::get('/admin/deleteWishlist/{id_wishlist}', 'WishlistController@destroy');
Route::get('admin/viewWishlist', 'WishlistController@viewWishlist');

// show kamera
Route::get('/sewa/kamera', 'SewaKameraController@index');
Route::get('/sewa/kamera/login', 'LoginController@index');
Route::get('/detil/kamera/{id_kamera}', 'SewaKameraController@detil_kamera'); 
Route::get('/sewa/kamera/canon', 'SewaKameraController@show_canon');
Route::get('/sewa/kamera/nikon', 'SewaKameraController@show_nikon');
Route::get('/sewa/kamera/sony', 'SewaKameraController@show_sony');
Route::get('/sewa/kamera/samsung', 'SewaKameraController@show_samsung');
Route::get('/sewa/kamera/gopro', 'SewaKameraController@show_gopro');
Route::get('/sewa/kamera/tersedia', 'SewaKameraController@show_tersedia');
Route::get('/sewa/kamera/tidak_tersedia', 'SewaKameraController@show_tidaktersedia');


// show lensa
Route::get('/sewa/lensa', 'SewaLensaController@index');
Route::get('/sewa/lensa/login', 'LoginController@index');
Route::get('/detil/lensa/{id_lensa}', 'SewaLensaController@detil_lensa'); 
Route::get('/sewa/lensa/canon', 'SewaLensaController@show_canon');
Route::get('/sewa/lensa/nikon', 'SewaLensaController@show_nikon');
Route::get('/sewa/lensa/sony', 'SewaLensaController@show_sony');
Route::get('/sewa/lensa/tersedia', 'SewaLensaController@show_tersedia');
Route::get('/sewa/lensa/tidak_tersedia', 'SewaLensaController@show_tidaktersedia');


// show aksesoris
Route::get('/sewa/aksesoris', 'SewaAksesorisController@index');
Route::get('/sewa/aksesoris/login', 'LoginController@index');
Route::get('/detil/aksesoris/{id}', 'SewaAksesorisController@detil_aksesoris'); 
Route::get('/sewa/aksesoris/tripod', 'SewaAksesorisController@show_tripod');
Route::get('/sewa/aksesoris/lighting', 'SewaAksesorisController@show_lighting');
Route::get('/sewa/aksesoris/microphone', 'SewaAksesorisController@show_microphone');
Route::get('/sewa/aksesoris/battery', 'SewaAksesorisController@show_battery');
Route::get('/sewa/aksesoris/memory', 'SewaAksesorisController@show_memory');
Route::get('/sewa/aksesoris/tersedia', 'SewaAksesorisController@show_tersedia');
Route::get('/sewa/aksesoris/tidak_tersedia', 'SewaAksesorisController@show_tidaktersedia');


//layout sub menu

Route::get('/prosedurSewa', 'MenuController@prosedur');

#login
Route::get('/login', 'LoginController@index');
Route::get('/daftar', 'DaftarController@index');
Route::post('/storeAdmin', "DaftarController@store");
Route::get('/daftar/sukses', 'DaftarController@sukses');
Route::post('/daftar_act', 'DaftarController@store');
Route::post('/login_check', 'LoginController@login' 
    //
);


// Route::get('/logout',function(){
// Auth:logout();

// return Redirect::to('');
// })->middleware("auth");

Route::get('/logout', function() {
    //
  Auth::logout();

  return Redirect::to('/login');
})->middleware('auth');

Route::group( ['middleware' => 'auth' ], function()
{
#admin page


Route::get('/admin/home', 'AdminController@dashboard');


####


#admin page

Route::get('/admin/logout', function() {
    //
  Auth::logout();

  return Redirect::to('/');
})->middleware('auth');
Route::get('/alogin', 'AdminController@index');
Route::get('/admin/home', 'AdminController@dashboard');


// khusuzon camera
Route::get('/admin/viewCamera', 'kameraController@viewCamera');
Route::get('/admin/viewCamera/canon', 'kameraController@show_canon');
Route::get('/admin/viewCamera/nikon', 'kameraController@show_nikon');
Route::get('/admin/viewCamera/samsung', 'kameraController@show_samsung');
Route::get('/admin/viewCamera/sony', 'kameraController@show_sony');
Route::get('/admin/viewCamera/goPro', 'kameraController@show_gopro');
Route::get('/admin/viewCamera/tersedia', 'kameraController@show_tersedia');
Route::get('/admin/viewCamera/kosong', 'kameraController@show_kosong');
Route::get('/admin/insertCamera', 'kameraController@insertCamera');
Route::post('/admin/storeCamera', "kameraController@storeCamera" 
    //
);
Route::get('/admin/lihatCamera/{merk}', 'kameraController@show' 
    //
);
Route::get('/admin/editCamera/{merk}', 'kameraController@edit' 
    //
);
Route::patch('/admin/editCamera/update/{id_kamera}', "kameraController@update" 
    //
);
Route::get('/admin/deleteCamera/{id_kamera}', 'kameraController@destroy' 
    //
);

// khusuzon lensa
Route::get('/admin/viewLensa', 'LensaController@viewLensa');
Route::get('/admin/viewLensa/canon', 'LensaController@show_canon');
Route::get('/admin/viewLensa/nikon', 'LensaController@show_nikon');
Route::get('/admin/viewLensa/sony', 'LensaController@show_sony');
Route::get('/admin/viewLensa/tersedia', 'LensaController@show_tersedia');
Route::get('/admin/viewLensa/kosong', 'LensaController@show_kosong');
Route::get('/admin/insertLensa', 'LensaController@insertLensa');
Route::get('/admin/update', 'LensaController@index');
Route::post('/admin/insertLensa', "LensaController@storeLensa" 
    //
);
Route::get('/admin/lihatLensa/{id_lensa}', 'LensaController@show' 
    //
);
Route::get('/admin/editLensa/{id_lensa}', 'LensaController@edit' 
    //
);
Route::patch('/admin/editLensa/update/{id_lensa}', "LensaController@updateLensa" 
    //
);
Route::post('/admin/storeLensa', "LensaController@storeLensa" 
    //
);
Route::get('/admin/deleteLensa/{id_lensa}', 'LensaController@destroy' 
    //
);


// khusuzon aksesoris
Route::get('/admin/viewAksesoris', 'AksesorisController@viewAksesoris');
Route::get('/admin/viewAksesoris/tripod', 'AksesorisController@show_tripod');
Route::get('/admin/viewAksesoris/lighting', 'AksesorisController@show_lighting');
Route::get('/admin/viewAksesoris/microphone', 'AksesorisController@show_microphone');
Route::get('/admin/viewAksesoris/battery', 'AksesorisController@show_battery');
Route::get('/admin/viewAksesoris/memory', 'AksesorisController@show_memory');
Route::get('/admin/viewAksesoris/tersedia', 'AksesorisController@show_tersedia');
Route::get('/admin/viewAksesoris/kosong', 'AksesorisController@show_kosong');
Route::get('/admin/insertAksesoris', 'AksesorisController@insertAksesoris');
Route::get('/admin/update', 'AksesorisController@index');
Route::post('/admin/insertAksesoris', "AksesorisController@storeAksesoris" 
    //
);
Route::get('/admin/lihatAksesoris/{id}', 'AksesorisController@show' 
    //
);
Route::get('/admin/editAksesoris/{id}', 'AksesorisController@edit' 
    //
);
Route::patch('/admin/editAksesoris/update/{id}', "AksesorisController@updateAksesoris" 
    //
);
Route::post('/admin/storeAksesoris', "AksesorisController@storeAksesoris" 
    //
);
Route::get('/admin/deleteAksesoris/{id_aksesoris}', 'AksesorisController@destroy' 
    //
);

// khusuzon cari
Route::get('queryKamera', 'CariController@searchKamera');
Route::get('queryLensa', 'CariController@searchLensa');
Route::get('queryAksesoris', 'CariController@searchAksesoris');
Route::get('queryContact', 'CariController@searchContact');
Route::get('queryWishlist', 'CariController@searchWishlist');

    });
// khusuzon cari di front-end


Route::get('searchKamera', 'CariController@homeKamera');
Route::get('searchLensa', 'CariController@homeLensa');
Route::get('searchAksesoris', 'CariController@homeAksesoris');




// Khusuzon Masukkan


// Route::get('admin/home', function() {
//     //
//     return view('admin.home');
// })->name('post');


