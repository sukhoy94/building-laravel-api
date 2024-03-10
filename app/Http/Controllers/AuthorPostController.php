<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\JsonResponse;

class AuthorPostController extends Controller
{
    public function index(Author $author): JsonResponse
    {
        return response()->json($author->posts);
    }
}
