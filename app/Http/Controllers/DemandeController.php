<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\DemandeImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DemandeController extends Controller
{
    public function index()
    {
        return view('demande.index');
    }
    public function create()
    {
        return view('demande.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $DataDemande=$request->validate([
            'title'=>'required',
            'Ville_adresse'=>'required',
            'address'=>'required',
            'categorie'=>'required',
            'Type_Travail'=>'required',
            'Description'=>'required',
            'image_url'=>'nullable|max:3076',
            'image_url2'=>'nullable|max:3076',
    ],[
            'title.required'=>'Le Nom de Demande sont obligatoire',
            'Ville_adresse'=>'La ville  doit pas vide ',
            'address.required'=>'Address obligatoire',
            'categorie.required'=>'categorie obligatoire',
            'Type_Travail.required'=>'Type de Realisation du Travail  obligatoire',
            'Description.required'=>' Description de demande  contraignant',
            'image_url.image'=>"Doit être une image",
            'image_url.mimes'=>'Doit être une image de type : jpeg,png',
            'image_url.max'=>'La taille de image est plus grand ',
            'image_url2.image'=>"Doit être une image",
            'image_url2.mimes'=>'Doit être une image de type : jpeg,png',
            'image_url2.max'=>'La taille de image est plus grand ',
    ]);
            $id = 706682;
            // try {
                $demande=Demande::create([
                // 'user_id'=>Auth::user()->id,
                'user_id'=>$id,
                'title'=>$request->title,
                'Ville_adresse'=>$request->Ville_adresse,
                'address'=>$request->address,
                'categorie_id'=>1,
                'Type_Travail'=>$request->Type_Travail,
                'info'=>$request->Description,
            ]);
                $demande_id = Demande::latest()->first();
                // dd($demande_id->id);
                $DemandeImages=DemandeImage::create([
                    'demande_id'=>$demande_id->id,
                    'image_url'=>$request->image_url,
                    'image_url2'=>$request->image_url2,
            ]);
            return redirect()->route('demandes.index')->with('Ajouter_Demande','Votre Demande'.$request->title.' a ete ajouté');
            // } catch (\Throwable $th) {
                // return session()->flash('Error_create-demande','Desole il  y a un problem dons votre demande Faire autre Demande');
            // }
            
            // if ($request->hasFile('image_url')) {
            //     // foreach ($request->file('images') as $image) {
            //     // $imageName = md5($image->getClientOriginalName() . time()) . '.' . $image->getClientOriginalExtension();
            //     // $image->storeAs('public/images', $imageName);

            //     // $demandeImage = new DemandeImage;
            //     // $demandeImage->path = $imageName;
            //     // $demande->images()->save($demandeImage);
            //     dd('yes');
            //  }
            // }
        // }catch (\Exception $th) {
        //     return session()->flash('Error_create-demande','Desole il  y a un problem dons votre demande Faire autre Demande');
        // }

    }



    // public function uploadImage(Request $request){
    //     // $FileName=$request->
    //     return $request;
        
    // }
}
