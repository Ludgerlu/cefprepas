<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    Testimony,
    Filiere,
    Formation
};

class TestimoniesController extends Controller
{
    public function index()
    {
        $testimonies = Testimony::with('filiere')->latest()->get();
        return view('admin.testimonies.index', compact('testimonies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $formations = Formation::all();
        return view('admin.testimonies.create', compact('formations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'formation_id' => 'required|exists:formations,id',
            'description_en' => 'required|string',
            'description_fr' => 'required|string',
        ]);

        // Handle image upload
        if ($request->hasFile('image_url')) {
            $imagesPath = public_path('images');
            $path = public_path('images/testimonies');
            if (!is_dir($imagesPath)) {
                mkdir($imagesPath);
            }

            // Create formations directory if it doesn't exist
            if (!is_dir($path)) {
                mkdir($path);
            }

            $dossier = rand(100, 999);
            if (!is_dir(public_path('images/testimonies/' . $dossier))) {
                mkdir(public_path('images/testimonies/' . $dossier));
            }
            $extensionFileUpload = pathinfo($request->file('image_url')->getClientOriginalName(), PATHINFO_EXTENSION);
            $cheminImage = 'T_IMAGE_' . rand(100, 999) . '.' . $extensionFileUpload;
            $request->file('image_url')->move(public_path('images/testimonies/' . $dossier), $cheminImage);
            $fileUrl = $dossier . '/' . $cheminImage;
            $validated['image_url'] = $fileUrl;
        }


        Testimony::create($validated);

        return redirect()->route('admin.testimonies.index')
                         ->with('success', 'Testimony created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimony $testimony)
    {
        // dd($testimony);
        return view('admin.testimonies.show', compact('testimony'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimony $testimony)
    {
        $formations = Formation::all();
        return view('admin.testimonies.edit', compact('testimony', 'formations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimony $testimony)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'formation_id' => 'required|exists:formations,id',
            'description_en' => 'required|string',
            'description_fr' => 'required|string',
        ]);

        // Handle image upload if new image is provided
        if ($request->hasFile('image_url')) {
            $imagesPath = public_path('images');
            $path = public_path('images/testimonies');
            if (!is_dir($imagesPath)) {
                mkdir($imagesPath);
            }

            // Create formations directory if it doesn't exist
            if (!is_dir($path)) {
                mkdir($path);
            }
            // First, delete the old image if it exists
            if ($testimony->image_url) { // Assuming $formation is your model instance
                $oldImagePath = public_path('images/testimonies/' . $testimony->image_url);
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
            if (!is_dir(public_path('images/testimonies/' . $dossier))) {
                mkdir(public_path('images/testimonies/' . $dossier));
            }
            $extensionFileUpload = pathinfo($request->file('image_url')->getClientOriginalName(), PATHINFO_EXTENSION);
            $cheminImage = 'T_IMAGE_' . rand(100, 999) . '.' . $extensionFileUpload;
            $request->file('image_url')->move(public_path('images/testimonies/' . $dossier), $cheminImage);
            $fileUrl = $dossier . '/' . $cheminImage;
            $data['image_url'] = $fileUrl;
        } else {
            unset($validated['image_url']);
        }

        $testimony->update($validated);

        return redirect()->route('admin.testimonies.index')
                         ->with('success', 'Testimony updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimony $testimony)
    {
        // Delete associated image
        if ($testimony->image_url) { // Assuming $formation is your model instance
            $oldImagePath = public_path('images/testimonies/' . $testimony->image_url);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
                // Optional: Remove the old directory if it's empty
                $oldDirectory = dirname($oldImagePath);
                if (count(scandir($oldDirectory)) == 2) { // Directory is empty
                    rmdir($oldDirectory);
                }
            }
        }
        $testimony->delete();
        return redirect()->route('admin.testimonies.index')
                         ->with('success', 'Testimony deleted successfully.');
    }
}
