<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePasteRequest;
use App\Http\Requests\UpdatePasteRequest;
use App\Models\Paste;

class PasteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Paste::all(['content', 'id']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePasteRequest $request)
    {

        $paste = Paste::create($request->validated());
        if ($request->hasHeader('X-App-Name') && $request->header('X-App-Name') === 'paste-cli') {
            return response()->json([
                'url' => 'https://paste.ahmetbarut.net/paste/' . $paste['id'],
            ], 201);
        }

        return $paste->only(['id']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Paste $paste)
    {
        return $paste->only(['content', 'id']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paste $paste)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePasteRequest $request, Paste $paste)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paste $paste)
    {
        //
    }
}
