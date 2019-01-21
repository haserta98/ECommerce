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

Route::get('/', 'AnasayfaController@index');

Route::get('/kategoriler/{kategori_id}','HomeController@kategori_index');

Route::get('/urun/{urun_id}','UrunController@urun_index');

Route::post('/urun/sepet/{urun_id}','SepetController@sepete_ekle')->name('sepete_ekle')->middleware('isAuth');

Route::get('/kayit','KullaniciController@kullanici_kayit_get');
Route::post('/kayit','KullaniciController@kullanici_kayit_post')->name('kayit');

Route::get('/giris','KullaniciController@kullanici_giris_get');
Route::post('/giris','KullaniciController@kullanici_giris_post')->name('giris');

Route::get('/cikis',function (){
   session()->flush();
   return redirect('/');
});

Route::get('/sepet','SepetController@sepet_index')->middleware('isAuth');
Route::get('/sepetsil','SepetController@sepet_temizle');
Route::get('/odeme','OdemeController@odeme_index');
Route::post('/odeme','OdemeController@odeme_post')->name('odeme_yap');
Route::get('/siparislerim','AnasayfaController@siparislerim');

Route::group(['prefix' => '/panel','middleware' => 'role'],function ()
{
    Route::get('/','AdminController@index');
    Route::group(['prefix' => '/uyeler'],function ()
    {
        Route::get('/','AdminController@uyeler_index');
        Route::get('/sil/{kullanici_id}','AdminController@uyeler_sil');
        Route::put('/guncelle/{kullanici_id}','AdminController@uyeler_guncelle_put')->name('uye_guncelle');
        Route::get('/guncelle/{kullanici_id}','AdminController@uyeler_guncelle_get');

    });
    Route::group(['prefix' => '/urunler'],function (){
        Route::get('/','AdminController@urunler_index');
        Route::get('/guncelle/{urun_id}','AdminController@urunler_guncelle_get');
        Route::put('/guncelle/{urun_id}','AdminController@urunler_guncelle_put')->name('urun_guncelle');
        Route::get('/sil/{urun_id}','AdminController@urunler_sil');
        Route::get('/ekle','AdminController@urun_ekle_get');
        Route::post('/ekle','AdminController@urun_ekle_post')->name('urun_ekle');
    });
    Route::group(['prefix' => '/indirimler'],function ()
    {
        Route::get('/','AdminController@indirimler_index');
        Route::get('/ekle','AdminController@indirim_ekle_get');
        Route::post('/ekle','AdminController@indirim_ekle_post')->name('indirim_ekle');
        Route::get('/guncelle/{indirim_id}','AdminController@indirim_guncelle_get');
        Route::put('/guncelle/{indirim_id}','AdminController@indirim_guncelle_put')->name('indirim_guncelle');
        Route::get('/sil/{indirim_id}','AdminController@indirim_sil');

    });

    Route::group(['prefix' => '/kategoriler'],function ()
    {
        Route::get('/','AdminController@kategori_index');
       Route::get('/ekle','AdminController@kategori_ekle_get');
       Route::post('/ekle','AdminController@kategori_ekle_post')->name('kategori_ekle');
       Route::get('/sil/{kategori_id}','AdminController@kategori_sil');
       Route::get('/guncelle','AdminController@kategori_guncelle_get');
       Route::put('/guncelle','AdminController@kategori_guncelle_put')->name('kategori_guncelle');
    });
});




