<?php

namespace App\Http\Controllers;
use App\Models\evenement;
use Illuminate\Http\Request;

class evenementController extends Controller
{
    public function listeEvenement()
    {
        $evenements = evenement::paginate(4);
        return view('evenement.liste', compact('evenements'));
    }

    public function addEvenement(){
        return view('evenement.add');
    }
    public function addevenement_action(Request $request){
        $request->validate([
            'nom_evenement' => 'required',
            'type_evenement'  => 'required',
            'description_evenement'  => 'required',
        ]);

        $pieceJointe = "a";
        if ($request->hasFile('photo_utilisateur')) {
            $dossier = rand(100, 999);
    
            if (!is_dir(public_path('images_event'))) {
                mkdir(public_path('images_event'));
            }
    
            if (!is_dir(public_path('images_event/' . $dossier))) {
                mkdir(public_path('images_event/' . $dossier));
            }
    
            $extensionFileUpload = pathinfo($request->file('photo_utilisateur')->getClientOriginalName(), PATHINFO_EXTENSION);
            $cheminImage = 'A_IMAGE_' . rand(100, 999) . '.' . $extensionFileUpload;
            $request->file('photo_utilisateur')->move(public_path('images_event/' . $dossier), $cheminImage);
    
            $fileUrl = $dossier . '/' . $cheminImage;
            $pieceJointe = $fileUrl;
            $dossierPhoto = $dossier;
        }

        $evenement = new evenement();
        $evenement->TITRE = $request->nom_evenement;
        $evenement->TYPE = $request->type_evenement;
        $evenement->DESCRIPTION = $request->description_evenement;
        $evenement->DATE_EVENEMENT = $request->date_evenement;
        $evenement->created_at = now();
        $evenement->CHEMIN_IMAGE = $pieceJointe;

        $evenement->save();

        return redirect('/evenement/add')->with('status','added user');

    }
    public function updateEvenement($id){
        // $evenements = evenements::find($id)->where('DELETED=0');
        $evenement = evenement::find($id);
        return view('evenement.update',compact('evenement'));
    }

    public function updateEvenement_action(Request $request){
        $request->validate([
            'nom_evenement' => 'required',
            'type_evenement'  => 'required',
            'description_evenement'  => 'required',
        ]);
        $evenement = evenement::find($request->event_id);

        $pieceJointe = "a";
        if ($request->hasFile('photo_utilisateur')) {
            $dossier = rand(100, 999);
    
            if (!is_dir(public_path('images_event'))) {
                mkdir(public_path('images_event'));
            }
    
            if (!is_dir(public_path('images_event/' . $dossier))) {
                mkdir(public_path('images_event/' . $dossier));
            }
    
            $extensionFileUpload = pathinfo($request->file('photo_utilisateur')->getClientOriginalName(), PATHINFO_EXTENSION);
            $cheminImage = 'A_IMAGE_' . rand(100, 999) . '.' . $extensionFileUpload;
            $request->file('photo_utilisateur')->move(public_path('images_event/' . $dossier), $cheminImage);
    
            $fileUrl = $dossier . '/' . $cheminImage;
            $pieceJointe = $fileUrl;
            $evenement->CHEMIN_IMAGE = $pieceJointe;

        }

        $evenement->TITRE = $request->nom_evenement;
        $evenement->TYPE = $request->type_evenement;
        $evenement->DESCRIPTION = $request->description_evenement;
        $evenement->DATE_EVENEMENT = $request->date_evenement;
        $evenement->updated_at = now();
        $evenement->update();
        return redirect('/evenement')->with('status','added user');
        
    }
    public function deleteEvenement($id){
        $evenement = evenement::find($id);
        $evenement->delete();
        return redirect('/evenement');

    }

}
