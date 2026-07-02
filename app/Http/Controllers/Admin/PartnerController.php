<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;
use Illuminate\Support\Facades\Validator;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('admin.partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new partner.
     */
    public function create()
    {
        return view('admin.partners.create');
    }

    /**
     * Store a newly created partner in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name_en' => 'required|string|max:100',
            'name_fr' => 'required|string|max:100',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'required|url|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = $request->except('logo');
        
        // Handle logo upload
        if ($request->hasFile('logo')) {
            $imagesPath = public_path('images');
            $path = public_path('images/partners'); // Changed to 'partners' directory
            if (!is_dir($imagesPath)) {
                mkdir($imagesPath, 0777, true);
            }

            // Create partners directory if it doesn't exist
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }

            $dossier = rand(100, 999);
            if (!is_dir(public_path('images/partners/' . $dossier))) {
                mkdir(public_path('images/partners/' . $dossier), 0777, true);
            }
            
            $extensionFileUpload = pathinfo($request->file('logo')->getClientOriginalName(), PATHINFO_EXTENSION);
            $cheminImage = 'T_IMAGE_' . rand(100, 999) . '.' . $extensionFileUpload;
            $request->file('logo')->move(public_path('images/partners/' . $dossier), $cheminImage);
            $fileUrl = $dossier . '/' . $cheminImage;
            $data['logo'] = $fileUrl;
        }

        Partner::create($data);

        return redirect()->route('admin.partners.index')
                         ->with('success', 'Partner created successfully.');
    }

    /**
     * Display the specified partner.
     */
    public function show(Partner $partner)
    {
        return view('admin.partners.show', compact('partner'));
    }

    /**
     * Show the form for editing the specified partner.
     */
    public function edit(Partner $partner)
    {
        return view('admin.partners.edit', compact('partner'));
    }

    /**
     * Update the specified partner in storage.
     */
    public function update(Request $request, Partner $partner)
    {
        $validator = Validator::make($request->all(), [
            'name_en' => 'required|string|max:100',
            'name_fr' => 'required|string|max:100',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'required|url|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = $request->except('logo');
        
        // Handle logo upload if new logo is provided
        if ($request->hasFile('logo')) {
            $imagesPath = public_path('images');
            $path = public_path('images/partners');
            if (!is_dir($imagesPath)) {
                mkdir($imagesPath, 0777, true);
            }

            // Create partners directory if it doesn't exist
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }
            
            // First, delete the old logo if it exists
            if ($partner->logo) {
                $oldImagePath = public_path('images/partners/' . $partner->logo);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                    // Optional: Remove the old directory if it's empty
                    $oldDirectory = dirname($oldImagePath);
                    if (count(scandir($oldDirectory)) == 2) { // Directory is empty
                        rmdir($oldDirectory);
                    }
                }
            }
            
            // Create new logo
            $dossier = rand(100, 999);
            if (!is_dir(public_path('images/partners/' . $dossier))) {
                mkdir(public_path('images/partners/' . $dossier), 0777, true);
            }
            
            $extensionFileUpload = pathinfo($request->file('logo')->getClientOriginalName(), PATHINFO_EXTENSION);
            $cheminImage = 'T_IMAGE_' . rand(100, 999) . '.' . $extensionFileUpload;
            $request->file('logo')->move(public_path('images/partners/' . $dossier), $cheminImage);
            $fileUrl = $dossier . '/' . $cheminImage;
            $data['logo'] = $fileUrl;
        }

        $partner->update($data);

        return redirect()->route('admin.partners.index')
                         ->with('success', 'Partner updated successfully.');
    }

    /**
     * Remove the specified partner from storage.
     */
    public function destroy(Partner $partner)
    {
        // Delete associated logo
        if ($partner->logo) {
            $oldImagePath = public_path('images/partners/' . $partner->logo);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
                // Optional: Remove the old directory if it's empty
                $oldDirectory = dirname($oldImagePath);
                if (count(scandir($oldDirectory)) == 2) { // Directory is empty
                    rmdir($oldDirectory);
                }
            }
        }

        $partner->delete();

        return redirect()->route('admin.partners.index')
                         ->with('success', 'Partner deleted successfully.');
    }
}