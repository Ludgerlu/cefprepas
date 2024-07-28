<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\filiere;

class filiereController extends Controller
{
    public function listeFiliere()
    {
        $filieres = filiere::paginate(4);
        return view('filiere.liste', compact('filieres'));
    }

    public function addFiliere(){
        return view('filiere.add');
    }

    public function addFiliere_action(Request $request){
        $request->validate([
            'nom_filiere' => 'required',
            'Reussite_filiere'  => 'required',
            'horaire_filiere'  => 'required',
            'date_filiere'  => 'required',
            'description_filiere'  => 'required',
            'objectif_filiere'  => 'required',

        ]);

        $pieceJointe = "a";
        if ($request->hasFile('photo_utilisateur')) {
            $dossier = rand(100, 999);
    
            if (!is_dir(public_path('images_filiere'))) {
                mkdir(public_path('images_filiere'));
            }
    
            if (!is_dir(public_path('images_filiere/' . $dossier))) {
                mkdir(public_path('images_filiere/' . $dossier));
            }
    
            $extensionFileUpload = pathinfo($request->file('photo_utilisateur')->getClientOriginalName(), PATHINFO_EXTENSION);
            $cheminImage = 'A_IMAGE_' . rand(100, 999) . '.' . $extensionFileUpload;
            $request->file('photo_utilisateur')->move(public_path('images_filiere/' . $dossier), $cheminImage);
    
            $fileUrl = $dossier . '/' . $cheminImage;
            $pieceJointe = $fileUrl;
            $dossierPhoto = $dossier;
        }

        $filiere = new filiere();
        $filiere->TITLE = $request->nom_filiere;
        $filiere->CHEMIN_IMAGE = $pieceJointe;
        $filiere->DESCRIPTION = $request->description_filiere;
        $filiere->OBJECTIF = $request->objectif_filiere;
        $filiere->REUSSITE = $request->Reussite_filiere;
        $filiere->HORAIRE = $request->horaire_filiere;
        $filiere->RENTREE = $request->date_filiere;
        $filiere->created_at = now();
        $filiere->save();

        return redirect('/filiere/add')->with('status','added user');

    }
    public function updateFiliere($id){
        // $temoignages = temoignages::find($id)->where('DELETED=0');
        $filiere = filiere::find($id);
        return view('filiere.update',compact('filiere'));
    }
    public function updateFiliere_action(Request $request){
        $request->validate([
            'nom_filiere' => 'required',
            'Reussite_filiere'  => 'required',
            'horaire_filiere'  => 'required',
            'date_filiere'  => 'required',
            'description_filiere'  => 'required',
            'objectif_filiere'  => 'required',

        ]);
        $filiere = filiere::find($request->filiere_id);
        $pieceJointe = "a";
        if ($request->hasFile('photo_utilisateur')) {
            $dossier = rand(100, 999);
    
            if (!is_dir(public_path('images_filiere'))) {
                mkdir(public_path('images_filiere'));
            }
    
            if (!is_dir(public_path('images_filiere/' . $dossier))) {
                mkdir(public_path('images_filiere/' . $dossier));
            }
    
            $extensionFileUpload = pathinfo($request->file('photo_utilisateur')->getClientOriginalName(), PATHINFO_EXTENSION);
            $cheminImage = 'A_IMAGE_' . rand(100, 999) . '.' . $extensionFileUpload;
            $request->file('photo_utilisateur')->move(public_path('images_filiere/' . $dossier), $cheminImage);
    
            $fileUrl = $dossier . '/' . $cheminImage;
            $pieceJointe = $fileUrl;
            $dossierPhoto = $dossier;
            $filiere->CHEMIN_IMAGE = $pieceJointe;

        }

        $filiere->TITLE = $request->nom_filiere;
        $filiere->DESCRIPTION = $request->description_filiere;
        $filiere->OBJECTIF = $request->objectif_filiere;
        $filiere->REUSSITE = $request->Reussite_filiere;
        $filiere->HORAIRE = $request->horaire_filiere;
        $filiere->RENTREE = $request->date_filiere;
        $filiere->updated_at = now();
        $filiere->update();
        return redirect('/filiere/')->with('status','added user');

    }
    public function deleteFiliere($id){
        $filiere = filiere::find($id);
        $filiere->delete();
        return redirect('/filiere');

    }
}
