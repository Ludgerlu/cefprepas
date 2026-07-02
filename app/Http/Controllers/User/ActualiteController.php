<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
class ActualiteController extends Controller
{
    public function index(){
        $events = Event::where('news',1)->latest()->get();
        return view('user.actualites.index', compact('events'));
    }

    public function show(Event $event){
        return view('user.actualites.show' ,compact('event'));
    }
}
