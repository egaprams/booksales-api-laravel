<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){
        $authors= Author::all();
        return response()->json([
            "succes" => true,
            "message" => "Get All Resources",
            "data" => $authors
        ]);
        // return view('author', ["authors"=> $authors]);
    }}
