<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EtudiantController extends Controller
{
    public function index(){
        $events = Event::where('news','0')->latest()->get();
        return view('user.etudiants.index', compact('events'));
    }

    public function show(Event $event){
        $event->increment('views');
        return view('user.etudiants.show',compact('event'));
    }
}
