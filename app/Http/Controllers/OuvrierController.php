<?php

namespace App\Http\Controllers;

use App\Http\Requests\ouvrierRequest;
use App\Models\Ouvrier;
use App\Models\Categorie;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OuvrierController extends Controller
{
   public $cities_morocco;

   public function index($categorie)
   {
      $ouvriers = Categorie::findOrFail($categorie)->ouvriers;
      return view('ouvrier.index', compact('ouvriers'));;
   }

   public function profile(Ouvrier $ouvrier)
   {
      return view('ouvrier.profile', compact('ouvrier'));
   }

   public function edit(Ouvrier $ouvrier)
   {
      if (auth()->id == $ouvrier->id) {
         dd($ouvrier);
      } else {
         abort(404);
      }
   }

   public function register()
   {
      $categories = DB::table('Categories')->select('id','nom_categorie')->get();
      $cities = $this->cities_morocco;
      return view('ouvrier.register',compact('cities','categories'));
   }
   public function store(ouvrierRequest $request)
   {
      try
      {  
         $valideFields = $request->validated();
         Ouvrier::create([
            'nom' => $valideFields['nom'],
            'prenom' => $valideFields['prenom'],
            'address' => $valideFields['address'],
            'ville' => $valideFields['ville'],
            'naissance' => $valideFields['naissance'],
            'cin' => $valideFields['cin'],
            'bio' => $valideFields['bio'],
            'phone' => $valideFields['phone'],
            'sexe' => $valideFields['sexe'],
            'email' => $valideFields['email'],
            'password' => $valideFields['password'],
            'experience' => $valideFields['experience'],
            'categorie_id' => $valideFields['categorie_id'],
         ]);
         return redirect()->route('login.index')->with('success','daz dakchi nadi hmd');
      } 
      catch(Exception $err)
      {
         abort(404);
      }
   }

   public function __construct()
   {
      $this->cities_morocco = [
         "Casablanca",
         "Rabat",
         "Fes",
         "Marrakech",
         "Tangier",
         "Meknes",
         "Oujda",
         "Agadir",
         "Kenitra",
         "Tetouan",
         "Safi",
         "Khouribga",
         "Beni Mellal",
         "El Jadida",
         "Nador",
         "Settat",
         "Larache",
         "Ksar El Kebir",
         "Guelmim",
         "Laayoune",
         "Dakhla"
       ];
   }
}
