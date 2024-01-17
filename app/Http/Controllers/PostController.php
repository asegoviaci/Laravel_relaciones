<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tema;
use App\Models\Usuario;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function view(){
        $usuario = Usuario::all();
        $temas = Tema::all();
        $post = Post::all();
        $usuariospost = Usuario::has('posts')->get();
        return view('post.crear')->with('usuario', $usuario) ->with('usuariosconposts', $usuariopost) ->with('post', $post) ->with('temas', $temas);
    }

    public function create(Request $request){
        $post = Post::create($request->all());
        $usuario = Usuario::find($request->usuario_id);
        $post->usuario()->associate($usuario);
        $post->temas()->sync($request->temas);
        $post->save();

        return redirect()->route('post.crear');
    }

    public function delete($id){
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('post.crear');
    }

    public function edit($id){
        $post = Post::find($id);
        $usuarios = Usuario::all();
        return view('post.edit')->with('post', $post) ->with('usuarios', $usuarios);
    }

    public function update(Request $request, $id){
        $post = Post::find($id);
        $post->update($request->all());
        return redirect()->route('post.crear');
    }

}

