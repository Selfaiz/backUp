<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Ouvrier;
use App\Models\Categorie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    { 
        $data=[
            'categories'=>Categorie::take(5)->get(),
            'clientCount'=>User::where('is_admin', 0)->count(),
            'ouvrierCount'=>Ouvrier::where('active', 1)->count(),
            'orederCount'=>Order::all()->count(),
            // 'OrderCount'=>Order::where('active', 1)->count(), not now migrate of order is not here

        ];
        return view('home',compact('data'));
    }
}
