<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = Document::all();
        return view('admin.documents.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.documents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_en' => 'required|string|max:100',
            'name_fr' => 'required|string|max:100',
            'document' => 'required|file|max:5120', // 5MB max
        ]);

        $file = $request->file('document');
        $path = $file->store('documents', 'public');

        Document::create([
            'user_id' => auth()->id(),
            'name_en' => $validated['name_en'],
            'name_fr' => $validated['name_fr'],
            'size' => $file->getSize(),
            'mime_type' => $file->getMimeType(),
            'path' => $path,
        ]);

        return redirect()->route('admin.documents.index')
            ->with('success', 'Document uploaded successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        return view('admin.documents.show', compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        return view('admin.documents.edit', compact('document'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {
        $validated = $request->validate([
            'name_en' => 'required|string|max:100',
            'name_fr' => 'required|string|max:100',
            'document' => 'nullable|file|max:5120',
        ]);

        $data = [
            'name_en' => $validated['name_en'],
            'name_fr' => $validated['name_fr'],
        ];

        if ($request->hasFile('document')) {
            // Delete old file
            Storage::disk('public')->delete($document->path);

            // Store new file
            $file = $request->file('document');
            $path = $file->store('documents', 'public');

            $data['size'] = $file->getSize();
            $data['mime_type'] = $file->getMimeType();
            $data['path'] = $path;
        }

        $document->update($data);

        return redirect()->route('admin.documents.index')
            ->with('success', 'Document updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        // Delete the file from storage
        Storage::disk('public')->delete($document->path);

        // Delete the record from database
        $document->delete();

        return redirect()->route('admin.documents.index')
            ->with('success', 'Document deleted successfully.');
    }

}