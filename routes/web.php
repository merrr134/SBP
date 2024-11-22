<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about-us/tentang-kami', function () {
    return view('about.tentang-kami');
});
Route::get('/about-us/visi-misi', function () {
    return view('about.visi-misi');
});
Route::get('/about-us/sejarah', function () {
    return view('about.sejarah');
});
Route::get('/about-us/tentang-site', function () {
    return view('about.tentang-site');
});
Route::get('/about-us/struktur', function () {
    return view('about.struktur');
});
Route::get('/about-us/laporan-penjualan', function () {
    return view('about.laporan-penjualan');
});
Route::get('/about-us/aset-perusahaan', function () {
    return view('about.aset-perusahaan');
});

Route::view('/news', 'news')->name('news');
Route::view('/contact', 'contact')->name('contact');
