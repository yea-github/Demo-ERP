<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return auth()->user()->books;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = auth()->user()->books()->create($request->all());
        return response()->json($book, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = auth()->user()->books()->findOrFail($id);
        $book->update($request->all());
        return response()->json($book);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = auth()->user()->books()->findOrFail($id);
        $book->delete();
        return response()->json(null, 204);
    }
}
