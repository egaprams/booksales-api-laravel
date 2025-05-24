<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return response()->json([
            "succes" => true,
            "message" => "Get All Resources",
            "data" => $authors
        ]);
        // return view('author', ["authors"=> $authors]);
    }

    public function store(Request $request)
    {
        // 1. validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'bio' => 'required|string',
        ]);

        // 2. check validator error
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        // 3. insert data
        $author = Author::create([
            'name' => $request->name,
            'bio' => $request->bio,
        ]);

        // 4. response
        return response()->json([
            'success' => true,
            'message' => 'Resource added successfully!',
            'data' => $author
        ], 201);
    }
}
