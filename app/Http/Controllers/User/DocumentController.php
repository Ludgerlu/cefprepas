<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Document;

class DocumentController extends Controller
{
    /**
     * Display a listing of documents
     */
    public function index()
    {
        $documents = Document::get();
        return view('user.document', compact('documents'));
    }

    /**
     * Download a document
     */
    public function download(Document $document)
    {
        $filePath = public_path($document->path);
        
        if (!file_exists($filePath)) {
            abort(404);
        }
        
        return response()->download($filePath, $document->name_en . '.' . pathinfo($document->path, PATHINFO_EXTENSION));
    }
}
