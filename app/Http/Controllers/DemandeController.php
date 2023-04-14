<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Traits\UploadFile;
use App\Models\DemandeImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DemandeController extends Controller
{

    use UploadFile;

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
        // dd($request->image_url);
        $DataDemande=$request->validate([
            'title'=>'required',
            'Ville_adresse'=>'required',
            'address'=>'required',
            'categorie'=>'required',
            'Type_Travail'=>'required',
            'Description'=>'required',
            'image_url'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:3048',
            'image_url2'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:3048',
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
        // dd($request->hasFile('image_url'));
        $id = 1;
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

            if ($request->hasFile('image_url') || $request->hasFile('image_url2')) {
                    $Img1ex=$request->image_url;
                    $Img2ex=$request->image_url2;
                    $$Img1ex=$request->file('image_url')->getClientOriginalName();
                    $$Img2ex=$request->file('image_url2')->getClientOriginalName();
                    
                    // dd($Img1ex,$Img2ex);
                    // dd($$Img1ex,$$Img2ex);

                    $demande_id = Demande::latest()->first();
                    $image_url=$this->UploadFile($Img1ex,$$Img1ex,'images/Demandes');
                    $image_url2=$this->UploadFile($Img2ex,$$Img2ex,'images/Demandes');

                    $DemandeImages=DemandeImage::create([
                        'demande_id'=>$demande_id->id,
                        'image_url'=>$image_url,
                        'image_url2'=>$image_url2,
                ]);
            }
            return redirect()->route('demandes.create')->with('Ajouter_Demande','Votre Demande'.$request->title.' a ete ajouté');
            // } catch (\Throwable $th) {
                // return redirect()->route('demandes.create')->with('Error_create-demande','Desole il  y a un problem dons votre demande Faire autre Demande');
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
