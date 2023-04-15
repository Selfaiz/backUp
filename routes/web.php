<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\OuvrierController;
use App\Http\Controllers\CategorieController;

 
/*
|--------------|
| Home Routes  |
|--------------|
*/

Route::get('/', [HomeController::class,'index']);

/*
|-------------------|
| Categorie Routes  |
|-------------------| 
*/
 
Route::prefix('categories')->controller(CategorieController::class)->group(function () {
    Route::get('/', 'index')->name('categories'); 
    Route::post('/search', 'search')->name('categories.search'); 
});

/*
|-----------------|
| Demande Routes  |
|-----------------| 
*/

// Route::prefix('demande')->controller(DemandeController::class)->group(function () {
//   Route::get('/', 'index')->name('index');
//   Route::get('/create', 'create')->name('create');
//   Route::post('demande', 'store')->name('store');   
// });
  
Route::resource('demandes', DemandeController::class);
Route::post('upload',[DemandeController::class,'uploadImage'])->name('uploadImage');
  /*
|----------------|
| Ouvier Routes  |
|----------------| 
*/

  // code..
  
/*
|--------------|
| Auth Routes  |
|--------------|
*/

Route::controller(AuthController::class)->group(function () {
  Route::get('/login', 'index')->name('login.index');  
});



/*
|--------------|
| Chat Routes  |
|--------------| 
*/
 
//code..

/*
|----------------|
| client Routes  |
|----------------| 
*/

//code..
 
/*
|-------------------|
| Dashboard Routes  |
|-------------------|
*/

//code..

  /*
|----------------|
| Ouvier Routes  |
|----------------| 
*/

Route::controller(OuvrierController::class)->group(function () {
  Route::get('/register', 'register')->name('ouvrier.register');  
  Route::get('/{ouvrier}', 'profile')->name('ouvrier.profile');  
  Route::get('/categorie/{ouvrier}', 'index')->name('categorie.ouvrier');  
  Route::get('/{ouvrier}/edit', 'edit')->name('ouvrier.edit');  

  Route::post('/ouvrier', 'store')->name('ouvrier.store');  
});

