<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Filiere;
use Illuminate\Support\Facades\Validator;
class FiliereController extends Controller
{
    public function index()
    {
        $filieres = Filiere::latest()->get();
        return view('admin.filieres.index', compact('filieres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.filieres.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'title_en' => 'required|string|max:100',
            'title_fr' => 'required|string|max:100',
            'sub_en' => 'required|string',
            'sub_fr' => 'required|string',
            'image_url' => 'required|string',
            'description_en' => 'required|string',
            'description_fr' => 'required|string',
            'objectif_en' => 'required|string',
            'objectif_fr' => 'required|string',
            'duree' => 'required|integer',
            'reussite' => 'required|integer',
            'rentree' => 'required|date',
        ]);

        if ($validated->fails()) {
            return redirect()->back()
                        ->withErrors($validated)
                        ->withInput();
        }
        // Handle image upload
        if ($request->hasFile('image_url')) {
            $imagePath = $request->file('image_url')->store('filieres', 'public');
            $validated['image_url'] = $imagePath;
        }
        Filiere::create($validated);

        return redirect()->route('admin.filieres.index')
                         ->with('success', 'Filiere created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Filiere $filiere)
    {
        return view('admin.filieres.show', compact('filiere'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Filiere $filiere)
    {
        return view('admin.filieres.form', compact('filiere'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Filiere $filiere)
    {
        $validated =$request->validate([
            'title_en' => 'required|string|max:100',
            'title_fr' => 'required|string|max:100',
            'sub_en' => 'required|string',
            'sub_fr' => 'required|string',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description_en' => 'required|string',
            'description_fr' => 'required|string',
            'objectif_en' => 'required|string',
            'objectif_fr' => 'required|string',
            'duree' => 'required|integer',
            'reussite' => 'required|integer',
            'rentree' => 'required|date',
        ]);
        
        // Handle image upload if new image is provided
        if ($request->hasFile('image_url')) {
            // Delete old image if exists
            if ($filiere->image_url) {
                Storage::disk('public')->delete($filiere->image_url);
            }
            
            $imagePath = $request->file('image_url')->store('filieres', 'public');
            $validated['image_url'] = $imagePath;
        } else {
            unset($validated['image_url']);
        }

        $filiere->update($validated);

        return redirect()->route('admin.filieres.index')
                         ->with('success', 'Filiere updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Filiere $filiere)
    {
        $filiere->delete();

        return redirect()->route('admin.filieres.index')
                         ->with('success', 'Filiere deleted successfully.');
    }
}
