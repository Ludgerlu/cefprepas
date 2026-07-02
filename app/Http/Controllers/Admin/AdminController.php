<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    Event,
    Testimony,
    Message,
    Formation,
};

class AdminController extends Controller
{
    public function index(){
        $stats = [
            'messages_count' => Message::count(),
            'testimonials' => Testimony::count(),
            'formations' => Formation::count(),
            'recent_events' => Event::where('created_at', '>', now()->subDays(30))->count(),
        ];

        // Get recent data for sections
        $recentData = [
            'messages' => Message::latest()->take(5)->get(),
            'testimonials' => Testimony::with('formation')->latest()
                                    ->take(3)
                                    ->get(),
            'formations' => Formation::latest()
                             ->take(4)
                             ->get(),
            'events' => Event::latest()
                        ->take(3)
                        ->get(),
        ];
        return view('admin.index',[
            'stats' => $stats,
            'recentData' => $recentData
        ]);
    }
}
