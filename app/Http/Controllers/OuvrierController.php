<?php

namespace App\Http\Controllers;

use App\Models\Ouvrier;
use App\Models\Categorie;
use Illuminate\Http\Request;

class OuvrierController extends Controller
{

   public function index(  $categorie)
   { 
      $ouvriers=Categorie::findOrFail($categorie)->ouvriers; 
      return view('ouvrier.index',compact('ouvriers'));;
   }

   public function profile(Ouvrier $ouvrier)
   {
      return view('ouvrier.profile',compact('ouvrier'));
   }
   public function edit(Ouvrier $ouvrier)
     {
      if(auth()->id==$ouvrier->id){
         dd($ouvrier);
      }else{
         abort(404);
      }
        
     }
}
