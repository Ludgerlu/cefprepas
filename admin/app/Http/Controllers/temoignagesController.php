<?php

namespace App\Http\Controllers;
use App\Models\temoignages;

use Illuminate\Http\Request;

class temoignagesController extends Controller
{

    public function listeTemoignage()
    {
        $temoignages = temoignages::paginate(4);
        return view('temoinage.liste', compact('temoignages'));
    }

    public function addTemoignage(){
        return view('temoinage.add');

    }

    public function addTemoignage_action(Request $request){
        $request->validate([
            'nom_temoignage' => 'required',
            'filiere_temoignage'  => 'required',
            'description_temoignage'  => 'required',
        ]);

        $pieceJointe = "a";
        if ($request->hasFile('photo_utilisateur')) {
            $dossier = rand(100, 999);
    
            if (!is_dir(public_path('images_temoin'))) {
                mkdir(public_path('images_temoin'));
            }
    
            if (!is_dir(public_path('images_temoin/' . $dossier))) {
                mkdir(public_path('images_temoin/' . $dossier));
            }
    
            $extensionFileUpload = pathinfo($request->file('photo_utilisateur')->getClientOriginalName(), PATHINFO_EXTENSION);
            $cheminImage = 'A_IMAGE_' . rand(100, 999) . '.' . $extensionFileUpload;
            $request->file('photo_utilisateur')->move(public_path('images_temoin/' . $dossier), $cheminImage);
    
            $fileUrl = $dossier . '/' . $cheminImage;
            $pieceJointe = $fileUrl;
            $dossierPhoto = $dossier;
        }

        $temoignage = new temoignages();
        $temoignage->TEMOIGNAGE_ID = "T" . date('YmdHis') . "_" . rand(100, 999) . "_" . rand(100, 999);
        $temoignage->NAME = $request->nom_temoignage;
        $temoignage->FILIERE = $request->filiere_temoignage;
        $temoignage->TEMOIGNAGE = $request->description_temoignage;
        $temoignage->CREATION_DATE = now();
        $temoignage->LAST_UPDATE_DATE = now();
        $temoignage->DELETED_DATE = now();
        $temoignage->ACTIVE = '1';
        $temoignage->DELETED = '0';
        $temoignage->IMAGE = $pieceJointe;

        $temoignage->save();

        return redirect('/temoignage/add')->with('status','added user');

    }
    public function updateTemoignage($id){
        // $temoignages = temoignages::find($id)->where('DELETED=0');
        $temoignage = temoignages::where("TEMOIGNAGE_ID",$id)->first();
        return view('temoinage.update',compact('temoignage'));
    }
    public function updateUser_action(Request $request){
        $request->validate([
            'nom_temoignage' => 'required',
            'filiere_temoignage'  => 'required',
            'description_temoignage'  => 'required',
        ]);

        $temoignage = temoignages::where("TEMOIGNAGE_ID ",$request->temoin_id);

        if ($request->hasFile('photo_utilisateur')) {
            $dossier = rand(100, 999);
    
            if (!is_dir(public_path('images_temoin'))) {
                mkdir(public_path('images_temoin'));
            }
    
            if (!is_dir(public_path('images_temoin/' . $dossier))) {
                mkdir(public_path('images_temoin/' . $dossier));
            }
    
            $extensionFileUpload = pathinfo($request->file('photo_utilisateur')->getClientOriginalName(), PATHINFO_EXTENSION);
            $cheminImage = 'A_IMAGE_' . rand(100, 999) . '.' . $extensionFileUpload;
            $request->file('photo_utilisateur')->move(public_path('images_temoin/' . $dossier), $cheminImage);
    
            $fileUrl = $dossier . '/' . $cheminImage;
            $pieceJointe = $fileUrl;
            $dossierPhoto = $dossier;
            $temoignage->IMAGE = $pieceJointe;

        }
        $temoignage->NAME = $request->nom_temoignage;
        $temoignage->FILIERE = $request->filiere_temoignage;
        $temoignage->TEMOIGNAGE = $request->description_temoignage;
        $temoignage->LAST_UPDATE_DATE = now();
        $temoignage->update();

        return redirect('/users');
        
    }
    public function deleteTemoignage($id){
        $temoignage = temoignages::where("TEMOIGNAGE_ID","$id");
        $temoignage->delete();
        return redirect('/temoignage');

    }
}
