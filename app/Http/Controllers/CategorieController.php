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
 
}
