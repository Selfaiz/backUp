<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function index()
    {
        return dd('chp');
    }
    public function create()
    {
        return view('demande.create');
    }
    public function store(Request $request)
    {
        dd($request->post());
    }
}
