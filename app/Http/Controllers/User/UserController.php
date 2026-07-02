<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inscription;
use App\Models\{
    Event,
    Testimony,
    Message,
    Formation,
    Partner,
    Image,
};
class UserController extends Controller
{
    public function index(){
         // Get recent data for sections
         $recentData = [
            'testimonials' => Testimony::with('formation')->latest()
                                    ->take(3)
                                    ->get(),
            'formations' => Formation::latest()
                             ->take(4)
                             ->get(),
            'events' => Event::where('news', '0')
                        ->latest()
                        ->take(3)
                        ->get(),
            'news' => Event::where('news', 1)
                        ->latest()
                        ->take(3)
                        ->get(),
            
            'partners' =>Partner::take(4)
                        ->get(),
        ];
        //  dd($recentData);
        return view('user.index',[
            'data' => $recentData
        ]);
    }
    public function about(){
        return view('user.about');
    }
    public function atout(){
        return view('user.atout');
    }
    public function contact(){
        return view('user.contact');
    }
    public function storeContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'numero' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        try {
            Message::create($validated);
            
            return back()->with('success', 'Thank you for your message! We will get back to you soon.');
        } catch (\Exception $e) {
            return back()
                ->with('error', 'There was an error submitting your message. Please try again later.')
                ->withInput();
        }
    }
    public function inscription()
    {
        $formations = Formation::all();
        // dd($formations);
        return view('user.inscription', compact('formations'));
    }
    public function inscription_store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'date_naissance' => 'required|date',
            'numero_portable' => 'required|numeric',
            'numero_whatsapp' => 'required|numeric',
            'lieu_residence' => 'required|string|max:100',
            'programme' => 'required|string|max:100',
            'formation_id' => 'required|numeric',
            'sexe' => 'required|string|max:100',
            'objectif' => 'required|string',
        ]);
        // dd($request);

        Inscription::create($validated);

        return redirect()->route('index')
                         ->with('success', 'Inscription created successfully.');
    }

    public function promoteur(){
        return view('user.promoteur');
    }
    public function diplome (){
        return view('user.diplome');
    }
    public function programme (){
        return view('user.programme');
    }
    public function photo(){
        $photos = Image::get();
        return view('user.galerie',compact('photos'));
    }
    public function emploie(){
        return view('user.emploie');
    }
}
