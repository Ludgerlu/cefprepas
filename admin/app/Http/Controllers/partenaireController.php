<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\partenaire;

class partenaireController extends Controller
{
    public function listePartenaire()
    {
        $partenaires = partenaire::paginate(4);
        return view('partenaire.liste', compact('partenaires'));
    }

    public function addPartenaire(){
        return view('partenaire.add');

    }
    public function addpartenaire_action(Request $request){
        $request->validate([
            'lien_partenaire' => 'required',
            'nom_partenaire'  => 'required',
        ]);

        $pieceJointe = "a";
        if ($request->hasFile('photo_utilisateur')) {
            $dossier = rand(100, 999);
    
            if (!is_dir(public_path('images_partner'))) {
                mkdir(public_path('images_partner'));
            }
    
            if (!is_dir(public_path('images_partner/' . $dossier))) {
                mkdir(public_path('images_partner/' . $dossier));
            }
    
            $extensionFileUpload = pathinfo($request->file('photo_utilisateur')->getClientOriginalName(), PATHINFO_EXTENSION);
            $cheminImage = 'A_IMAGE_' . rand(100, 999) . '.' . $extensionFileUpload;
            $request->file('photo_utilisateur')->move(public_path('images_partner/' . $dossier), $cheminImage);
    
            $fileUrl = $dossier . '/' . $cheminImage;
            $pieceJointe = $fileUrl;
            $dossierPhoto = $dossier;
        }

        $partenaire = new partenaire();
        
        $partenaire->TITLE = $request->nom_partenaire;
        $partenaire->LINK = $request->lien_partenaire;
        $partenaire->created_at = now();
        $partenaire->CHEMIN_IMAGE = $pieceJointe;

        $partenaire->save();

        return redirect('/partenaire/')->with('status','added user');

    }
    public function updatepartenaire($id){
        // $partenaires = partenaires::find($id)->where('DELETED=0');
        $partenaire = partenaire::find($id);
        return view('partenaire.update',compact('partenaire'));
    }
    public function updatePartenaire_action(Request $request){
        $request->validate([
            'lien_partenaire' => 'required',
            'nom_partenaire'  => 'required',
        ]);
        $partenaire = partenaire::find($request->partner_id);


        $pieceJointe = "a";
        if ($request->hasFile('photo_utilisateur')) {
            $dossier = rand(100, 999);
    
            if (!is_dir(public_path('images_partner'))) {
                mkdir(public_path('images_partner'));
            }
    
            if (!is_dir(public_path('images_partner/' . $dossier))) {
                mkdir(public_path('images_partner/' . $dossier));
            }
    
            $extensionFileUpload = pathinfo($request->file('photo_utilisateur')->getClientOriginalName(), PATHINFO_EXTENSION);
            $cheminImage = 'A_IMAGE_' . rand(100, 999) . '.' . $extensionFileUpload;
            $request->file('photo_utilisateur')->move(public_path('images_partner/' . $dossier), $cheminImage);
    
            $fileUrl = $dossier . '/' . $cheminImage;
            $pieceJointe = $fileUrl;
            $dossierPhoto = $dossier;
            $partenaire->CHEMIN_IMAGE = $pieceJointe;

        }

        
        $partenaire->TITLE = $request->nom_partenaire;
        $partenaire->LINK = $request->lien_partenaire;
        $partenaire->updated_at = now();

        $partenaire->update();

        return redirect('/partenaire/')->with('status','added user');

    }
    public function deletepartenaire($id){
        $partenaire = partenaire::find($id);
        $partenaire->delete();
        return redirect('/partenaire');

    }
}
