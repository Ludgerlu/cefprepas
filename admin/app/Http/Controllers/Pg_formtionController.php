<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pg_formtion;
class Pg_formtionController extends Controller
{
    public function liste_pg_formtion()
    {
        $pg_formtions = Pg_formtion::paginate(4);
        return view('pg_formtion.liste', compact('pg_formtions'));
    }

    public function add_pg_formtion(){
        return view('pg_formtion.add');

    }
    public function add_pg_formtion_action(Request $request){
        $request->validate([
            'description_pg_formtion.*' => 'required',
            'nom_pg_formtion'  => 'required',
        ]);

        $pg_formtion = new pg_formtion();
        
        $pg_formtion->TITLE = $request->nom_pg_formtion;
        $pg_formtion->DESCRIPTION = $request->description_pg_formtion;
        $pg_formtion->created_at = now();
        $pg_formtion->save();

        return redirect('/pg_formtion/')->with('status','added user');

    }
    public function update_pg_formtion($id){
        // $pg_formtions = pg_formtions::find($id)->where('DELETED=0');
        $pg_formtion = pg_formtion::find($id);
        return view('pg_formtion.update',compact('pg_formtion'));
    }
    public function update_pg_formtion_action(Request $request){
        $request->validate([
            'lien_pg_formtion' => 'required',
            'nom_pg_formtion'  => 'required',
        ]);
        $pg_formtion = pg_formtion::find($request->partner_id);


       

        
        $pg_formtion->TITLE = $request->nom_pg_formtion;
        $pg_formtion->LINK = $request->lien_pg_formtion;
        $pg_formtion->updated_at = now();

        $pg_formtion->update();

        return redirect('/pg_formtion/')->with('status','added user');

    }
    public function delete_pg_formtion($id){
        $pg_formtion = pg_formtion::find($id);
        $pg_formtion->delete();
        return redirect('/pg_formtion');
    }
}
