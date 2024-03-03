<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $authors = Author::all();

        return response()->json($authors->toJson());
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        Author::create($request->all());

        return response()->json([
            'success' => true,
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show(Author $author): JsonResponse
    {
        return response()->json($author->toJson());
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author): JsonResponse
    {
        $author->update($request->all());
        return response()->json([
            'success' => true,
            'author' => $author->toArray(),
        ], 201);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author): Response
    {
        $author->delete();
        return response()->noContent();
    }
}
