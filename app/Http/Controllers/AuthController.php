<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
}
