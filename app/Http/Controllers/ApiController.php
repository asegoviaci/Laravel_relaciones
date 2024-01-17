<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ApiController extends Controller
{
    public function getPostUsuario($id)
    {
        $posts = Post::where('usuario_id', $id)->orderBy('titulo', 'asc') ->get();
        return response()->json($posts);
    }
    public function getPostRecientes()
    {
        $posts = Post::orderBy('created_at', 'desc')->take(12)->get();
        return response()->json($posts);
    }
}

