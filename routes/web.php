<?php
 
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
    Route::get('/{Categorie}', 'ouvrier')->name('categories.ouvrier'); 
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
 
//code..


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



