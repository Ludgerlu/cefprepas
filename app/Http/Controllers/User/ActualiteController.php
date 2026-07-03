<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
class ActualiteController extends Controller
{
    public function index(){
        $events = Event::where('news',1)->latest()
                   ->paginate(4); // 4 articles par page
        return view('user.actualites.index', compact('events'));
    }

    public function show(Event $event){
        $event->increment('views');
        return view('user.actualites.show' ,compact('event'));
    }
}
