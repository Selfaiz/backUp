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

Route::prefix('demande')->name('demande.')->controller(DemandeController::class)->group(function () {
  Route::get('/create', 'create')->name('create');   
});
  

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



