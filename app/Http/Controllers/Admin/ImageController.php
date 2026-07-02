<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Image::get();
        return view('admin.images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.images.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name_en' => 'required|string|max:100',
            'name_fr' => 'required|string|max:100',
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = $request->except('image_url');
        
        // Handle image upload
        if ($request->hasFile('image_url')) {
            $imagesPath = public_path('images');
            $path = public_path('images/galerie'); // Changed from 'events' to 'galerie'
            if (!is_dir($imagesPath)) {
                mkdir($imagesPath, 0777, true);
            }

            // Create images directory if it doesn't exist
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }

            $dossier = rand(100, 999);
            if (!is_dir(public_path('images/galerie/' . $dossier))) {
                mkdir(public_path('images/galerie/' . $dossier), 0777, true);
            }
            
            $extensionFileUpload = pathinfo($request->file('image_url')->getClientOriginalName(), PATHINFO_EXTENSION);
            $cheminImage = 'T_IMAGE_' . rand(100, 999) . '.' . $extensionFileUpload;
            $request->file('image_url')->move(public_path('images/galerie/' . $dossier), $cheminImage);
            $fileUrl = $dossier . '/' . $cheminImage;
            $data['image_url'] = $fileUrl;
        }

        Image::create($data);

        return redirect()->route('admin.images.index')
                         ->with('success', 'Image created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        return view('admin.images.show', compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        return view('admin.images.form', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        $validator = Validator::make($request->all(), [
            'name_en' => 'required|string|max:100',
            'name_fr' => 'required|string|max:100',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = $request->except('image_url');
        
        // Handle image upload if new image is provided
        if ($request->hasFile('image_url')) {
            $imagesPath = public_path('images');
            $path = public_path('images/galerie');
            if (!is_dir($imagesPath)) {
                mkdir($imagesPath, 0777, true);
            }

            // Create images directory if it doesn't exist
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }
            
            // First, delete the old image if it exists
            if ($image->image_url) {
                $oldImagePath = public_path('images/galerie/' . $image->image_url);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                    // Optional: Remove the old directory if it's empty
                    $oldDirectory = dirname($oldImagePath);
                    if (count(scandir($oldDirectory)) == 2) { // Directory is empty
                        rmdir($oldDirectory);
                    }
                }
            }
            
            // Create new image
            $dossier = rand(100, 999);
            if (!is_dir(public_path('images/galerie/' . $dossier))) {
                mkdir(public_path('images/galerie/' . $dossier), 0777, true);
            }
            
            $extensionFileUpload = pathinfo($request->file('image_url')->getClientOriginalName(), PATHINFO_EXTENSION);
            $cheminImage = 'T_IMAGE_' . rand(100, 999) . '.' . $extensionFileUpload;
            $request->file('image_url')->move(public_path('images/galerie/' . $dossier), $cheminImage);
            $fileUrl = $dossier . '/' . $cheminImage;
            $data['image_url'] = $fileUrl;
        }

        $image->update($data);

        return redirect()->route('admin.images.index')
                         ->with('success', 'Image updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        // Delete associated image
        if ($image->image_url) {
            $oldImagePath = public_path('images/galerie/' . $image->image_url);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
                // Optional: Remove the old directory if it's empty
                $oldDirectory = dirname($oldImagePath);
                if (count(scandir($oldDirectory)) == 2) { // Directory is empty
                    rmdir($oldDirectory);
                }
            }
        }

        $image->delete();

        return redirect()->route('admin.images.index')
                         ->with('success', 'Image deleted successfully.');
    }
}