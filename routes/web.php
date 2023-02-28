<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/fa');
Route::group(['prefix' => '{local}'], function(){
    Route::get('/', function () {
        return view('site.home.home');
    })->name('home');
    Route::get('/works', function () {
        return view('site.works.works');
    })->name('works');
    Route::get('/work-detail', function () {
        return view('site.works.work-detail');
    })->name('work-detail');
    Route::get('/blogs', function () {
        return view('site.blogs.blogs');
    })->name('blogs');
    Route::get('/blog-detail', function () {
        return view('site.blogs.blog-detail');
    })->name('blog-detail');
 
});



