<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inscription;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inscriptions = Inscription::latest()->paginate(10);
        return view('admin.inscriptions.index', compact('inscriptions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.inscriptions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:20',
            'date_naissance' => 'required|date',
            'numero_portable' => 'required|numeric',
            'numero_whatsapp' => 'required|numeric',
            'lieu_residence' => 'required|string|max:100',
            'programme' => 'required|string|max:100',
            'filiere' => 'required|numeric',
            'sexe' => 'required|string|max:100',
            'objectif' => 'required|string',
        ]);

        Inscription::create($validated);

        return redirect()->route('admin.inscriptions.index')
                         ->with('success', 'Inscription created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inscription $inscription)
    {
        return view('admin.inscriptions.show', compact('inscription'));
    }
}
