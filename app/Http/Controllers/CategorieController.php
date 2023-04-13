<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class CategorieController extends Controller
{
    public function index()
    {
        $categories=Categorie::all(); 
        return view('categorie.index',compact('categories'));
    }
    public function search(Request $request)
    { 
        $categories=Categorie::where('nom_categorie', $request->search)->get()->first() ;  
        if($categories){
            $ouvries=$categories->ouvriers;
            return redirect()->route('categorie.ouvrier',$categories->id) ;
        }
        return redirect('/');
    }
}
