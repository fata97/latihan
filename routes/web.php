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

Route::get('/', function () {
    return view('login');
});



Route::group(['prefix' => 'siswa'], function(){
  Route::get('/', 'SiswaController@index');
  Route::get('/create', 'SiswaController@create');
  Route::get('/edit', 'SiswaController@edit');
  Route::get('/detail', 'SiswaController@detail');
});

Route::group(['prefix' => 'kelas'], function(){
  Route::get('/', 'KelasController@index');
  Route::get('/create', 'KelasController@create');
  Route::get('/edit', 'KelasController@edit');
});

Route::group(['prefix' => 'guru'], function(){
  Route::get('/', 'GuruController@index');
  Route::get('/create', 'GuruController@create');
  Route::get('/edit', 'GuruController@edit');
});

Route::group(['prefix' => 'skill'], function(){
  Route::get('/', 'SkillController@index');
  Route::get('/create_skill', 'SkillController@create_skill');
  Route::get('/create_softskill', 'SkillController@create_softskill');
  Route::get('/edit', 'SkillController@edit');
});
