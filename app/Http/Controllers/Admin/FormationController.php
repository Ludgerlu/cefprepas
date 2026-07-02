<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Formation;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formations = Formation::latest()->get();
        return view('admin.formations.index', compact('formations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.formations.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_en' => 'required|string|max:100',
            'title_fr' => 'required|string|max:100',
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'filieres_en' => 'required|string',
            'filieres_fr' => 'required|string',
            'description_en' => 'required|string',
            'description_fr' => 'required|string',
            'objectif_en' => 'required|string',
            'objectif_fr' => 'required|string',
            'duree' => 'required|integer',
            'reussite' => 'required|integer|min:0|max:100',
            'rentree' => 'required|date',
        ]);
        $data = $request->except('image_url');
        // Handle image upload
        if ($request->hasFile('image_url')) {
            $imagesPath = public_path('images');
            $formationsPath = public_path('images/formations');
            if (!is_dir($imagesPath)) {
                mkdir($imagesPath);
            }

            // Create formations directory if it doesn't exist
            if (!is_dir($formationsPath)) {
                mkdir($formationsPath);
            }

            $dossier = rand(100, 999);
            if (!is_dir(public_path('images/formations/' . $dossier))) {
                mkdir(public_path('images/formations/' . $dossier));
            }
            $extensionFileUpload = pathinfo($request->file('image_url')->getClientOriginalName(), PATHINFO_EXTENSION);
            $cheminImage = 'F_IMAGE_' . rand(100, 999) . '.' . $extensionFileUpload;
            $request->file('image_url')->move(public_path('images/formations/' . $dossier), $cheminImage);
            $fileUrl = $dossier . '/' . $cheminImage;
            $data['image_url'] = $fileUrl;
        }

        Formation::create($data);

        return redirect()->route('admin.formations.index')
                         ->with('success', 'Formation created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Formation $formation)
    {
        return view('admin.formations.show', compact('formation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formation $formation)
    {
        return view('admin.formations.form', compact('formation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formation $formation)
    {
        $validator = Validator::make($request->all(), [
            'title_en' => 'required|string|max:100',
            'title_fr' => 'required|string|max:100',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'filieres_en' => 'required|string',
            'filieres_fr' => 'required|string',
            'description_en' => 'required|string',
            'description_fr' => 'required|string',
            'objectif_en' => 'required|string',
            'objectif_fr' => 'required|string',
            'duree' => 'required|integer',
            'reussite' => 'required|integer|min:0|max:100',
            'rentree' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = $request->except('image_url');

        if ($request->hasFile('image_url')) {
            $imagesPath = public_path('images');
            $formationsPath = public_path('images/formations');
            // First, delete the old image if it exists
            if ($formation->image_url) { // Assuming $formation is your model instance
                $oldImagePath = public_path('images/formations/' . $formation->image_url);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                    // Optional: Remove the old directory if it's empty
                    $oldDirectory = dirname($oldImagePath);
                    if (count(scandir($oldDirectory)) == 2) { // Directory is empty
                        rmdir($oldDirectory);
                    }
                }
            }
        
            // Then create the new image (your existing code)
            $dossier = rand(100, 999);
            // Create images directory if it doesn't exist
            if (!is_dir($imagesPath)) {
                mkdir($imagesPath);
            }

            // Create formations directory if it doesn't exist
            if (!is_dir($formationsPath)) {
                mkdir($formationsPath);
            }
            if (!is_dir(public_path('images/formations/' . $dossier))) {
                mkdir(public_path('images/formations/' . $dossier));
            }
            $extensionFileUpload = pathinfo($request->file('image_url')->getClientOriginalName(), PATHINFO_EXTENSION);
            $cheminImage = 'F_IMAGE_' . rand(100, 999) . '.' . $extensionFileUpload;
            $request->file('image_url')->move(public_path('images/formations/' . $dossier), $cheminImage);
            $fileUrl = $dossier . '/' . $cheminImage;
            $data['image_url'] = $fileUrl;
        }
        $formation->update($data);

        return redirect()->route('admin.formations.index')
                         ->with('success', 'Formation updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formation $formation)
    {
        // First, delete the old image if it exists
        if ($formation->image_url) { // Assuming $formation is your model instance
            $oldImagePath = public_path('images/formations/' . $formation->image_url);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
                
                // Optional: Remove the old directory if it's empty
                $oldDirectory = dirname($oldImagePath);
                if (count(scandir($oldDirectory)) == 2) { // Directory is empty
                    rmdir($oldDirectory);
                }
            }
        }
        $formation->delete();

        return redirect()->route('admin.formations.index')
                         ->with('success', 'Formation deleted successfully.');
    }
}