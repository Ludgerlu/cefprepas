<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Formation;

class FormationController extends Controller
{
    public function index(){
        $formations = Formation::get();
        return view('user.formations.index', compact('formations'));
    }

    public function show (Formation $formation){
        return view('user.formations.show', compact('formation'));
    }
}
