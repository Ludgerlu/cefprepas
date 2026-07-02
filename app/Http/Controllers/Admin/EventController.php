<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::latest()->get();
        return view('admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $eventTypes = [
            0 => 'Student Life / Vie d\'Etudiant',
            1 => 'News / Actualité',
        ];
        
        return view('admin.events.form', compact('eventTypes'));
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
            'description_en' => 'required|string',
            'description_fr' => 'required|string',
            'news' => 'required|string',
            'date_event' => 'required|date',
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
            $path = public_path('images/events');
            if (!is_dir($imagesPath)) {
                mkdir($imagesPath);
            }

            // Create formations directory if it doesn't exist
            if (!is_dir($path)) {
                mkdir($path);
            }

            $dossier = rand(100, 999);
            if (!is_dir(public_path('images/events/' . $dossier))) {
                mkdir(public_path('images/events/' . $dossier));
            }
            $extensionFileUpload = pathinfo($request->file('image_url')->getClientOriginalName(), PATHINFO_EXTENSION);
            $cheminImage = 'T_IMAGE_' . rand(100, 999) . '.' . $extensionFileUpload;
            $request->file('image_url')->move(public_path('images/events/' . $dossier), $cheminImage);
            $fileUrl = $dossier . '/' . $cheminImage;
            $data['image_url'] = $fileUrl;
        }

        Event::create($data);

        return redirect()->route('admin.events.index')
                         ->with('success', 'Event created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('admin.events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        $eventTypes = [
            0 => 'Student Life / Vie d\'Etudiant',
            1 => 'News / Actualité',
        ];
        
        return view('admin.events.form', compact('event', 'eventTypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $validator = Validator::make($request->all(), [
            'title_en' => 'required|string|max:100',
            'title_fr' => 'required|string|max:100',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description_en' => 'required|string',
            'description_fr' => 'required|string',
            'news' => 'required|string',
            'date_event' => 'required|date',
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
            $path = public_path('images/events');
            if (!is_dir($imagesPath)) {
                mkdir($imagesPath);
            }

            // Create formations directory if it doesn't exist
            if (!is_dir($path)) {
                mkdir($path);
            }
            // First, delete the old image if it exists
            if ($event->image_url) { // Assuming $formation is your model instance
                $oldImagePath = public_path('images/events/' . $event->image_url);
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
            if (!is_dir(public_path('images/events/' . $dossier))) {
                mkdir(public_path('images/events/' . $dossier));
            }
            $extensionFileUpload = pathinfo($request->file('image_url')->getClientOriginalName(), PATHINFO_EXTENSION);
            $cheminImage = 'T_IMAGE_' . rand(100, 999) . '.' . $extensionFileUpload;
            $request->file('image_url')->move(public_path('images/events/' . $dossier), $cheminImage);
            $fileUrl = $dossier . '/' . $cheminImage;
            //dd($fileUrl);
            $data['image_url'] = $fileUrl;
        }
        //dd($data);
        $event->update($data);

        return redirect()->route('admin.events.index')
                         ->with('success', 'Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        // Delete associated image
        if ($event->image_url) { // Assuming $formation is your model instance
            $oldImagePath = public_path('images/events/' . $event->image_url);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
                // Optional: Remove the old directory if it's empty
                $oldDirectory = dirname($oldImagePath);
                if (count(scandir($oldDirectory)) == 2) { // Directory is empty
                    rmdir($oldDirectory);
                }
            }
        }

        $event->delete();

        return redirect()->route('admin.events.index')
                         ->with('success', 'Event deleted successfully.');
    }
}