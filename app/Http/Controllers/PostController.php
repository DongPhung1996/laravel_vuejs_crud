<?php

// PostController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\PostCollection;
use App\Post;

class PostController extends Controller
{
    public function store(Request $request)
    {
      $post = new Post([
        'sku' => strtoupper($request->get('sku')),
        'name' => $request->get('name'),
        'description' => $request->get('description'),
        'price' => $request->get('price')
      ]);

      $post->save();

      return response()->json('successfully added');
    }

    public function index()
    {
      return new PostCollection(Post::all());
    }

    public function home()
    {
      return new PostCollection(Post::all());
    }

    public function edit($id)
    {
      $post = Post::find($id);
      return response()->json($post);
    }

    public function update($id, Request $request)
    {
      $post = Post::find($id);

      $post->update($request->all());

      return response()->json('successfully updated');
    }

    public function delete($id)
    {
      $post = Post::find($id);

      $post->delete();

      return response()->json('successfully deleted');
    }
}