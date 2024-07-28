<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\attachments;

class attachmentController extends Controller
{
    public function listeattachment()
    {
        $attachments = attachments::paginate(4);
        return view('attachment.liste', compact('attachments'));
    }

    public function addAttachment(){
        return view('attachment.add');

    }

    public function addAttachment_action(Request $request){
        $request->validate([
            'nom_attachment' => 'required',
            'filiere_attachment'  => 'required',
        ]);

        $pieceJointe = "a";
        if ($request->hasFile('photo_utilisateur')) {
            $dossier = rand(100, 999);
    
            if (!is_dir(public_path('images_attache'))) {
                mkdir(public_path('images_attache'));
            }
    
            if (!is_dir(public_path('images_attache/' . $dossier))) {
                mkdir(public_path('images_attache/' . $dossier));
            }
    
            $extensionFileUpload = pathinfo($request->file('photo_utilisateur')->getClientOriginalName(), PATHINFO_EXTENSION);
            $cheminImage = 'A_IMAGE_' . rand(100, 999) . '.' . $extensionFileUpload;
            $request->file('photo_utilisateur')->move(public_path('images_attache/' . $dossier), $cheminImage);
    
            $fileUrl = $dossier . '/' . $cheminImage;
            $pieceJointe = $fileUrl;
            $dossierPhoto = $dossier;
        }

        $attachment = new attachments();
        $attachment->ATTACHMENT_ID = "A" . date('YmdHis') . "_" . rand(100, 999) . "_" . rand(100, 999);
        $attachment->LIBELLE = $request->nom_attachment;
        $attachment->CATEGORIE = $request->filiere_attachment;
        $attachment->CREATION_DATE = now();
        $attachment->LAST_UPDATE_DATE = now();
        $attachment->DELETED_DATE = now();
        $attachment->ACTIVE = '1';
        $attachment->DELETED = '0';
        $attachment->CHEMIN_IMAGE = $pieceJointe;

        $attachment->save();

        return redirect('/attachment/')->with('status','added user');

    }
    public function updateAttachment($id){
        // $attachments = attachments::find($id)->where('DELETED=0');
        $attachment = attachments::where("ATTACHMENT_ID",$id)->first();
        return view('attachment.update',compact('attachment'));
    }
    public function updateAttachment_action(Request $request){
        $request->validate([
            'nom_attachment' => 'required',
            'filiere_attachment'  => 'required',
        ]);

        $attachment = attachments::where("ATTACHMENT_ID",$request->attache_id)->first();
        
        if ($request->hasFile('photo_utilisateur')) {
            $dossier = rand(100, 999);
    
            if (!is_dir(public_path('images_attache'))) {
                mkdir(public_path('images_attache'));
            }
    
            if (!is_dir(public_path('images_attache/' . $dossier))) {
                mkdir(public_path('images_attache/' . $dossier));
            }
    
            $extensionFileUpload = pathinfo($request->file('photo_utilisateur')->getClientOriginalName(), PATHINFO_EXTENSION);
            $cheminImage = 'A_IMAGE_' . rand(100, 999) . '.' . $extensionFileUpload;
            $request->file('photo_utilisateur')->move(public_path('images_attache/' . $dossier), $cheminImage);
    
            $fileUrl = $dossier . '/' . $cheminImage;
            $pieceJointe = $fileUrl;
            $attachment->CHEMIN_IMAGE = $pieceJointe;

        }
        $attachment->LIBELLE = $request->nom_attachment;
        $attachment->CATEGORIE = $request->filiere_attachment;
        $attachment->LAST_UPDATE_DATE = now();
        $attachment->update([
            'LIBELLE' => $request->nom_attachment,
            'CATEGORIE' => $request->filiere_attachment,
            'LAST_UPDATE_DATE' => now(),
        ]);

        return redirect('/attachment');
        
    }
    public function deleteAttachment($id){
        $attachment = attachments::where("ATTACHMENT_ID","$id");
        $attachment->delete();
        return redirect('/attachment');

    }}
