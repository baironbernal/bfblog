<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;



class PostController extends Controller
{
   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name','id')->all();
        return view('admin.post.create', compact('categories'));
    }


    public function publish($id)
    {
        $post = Post::find($id);
        $post->status = 1;
        $post->save();

        return response()->json(['post', $post]);

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 dd($request);
            $validator = Validator::make($request->all(), [
                'title' => 'required | max:50',
                'author' => 'required | max:350',
                'file' => 'required | mimes:jpeg,jpg,png,gif',
                'description' => 'required | max:10000',
                'category_id' => 'required',
            ]);

          if ($validator->fails()) {
            return Redirect::back()
                        ->withErrors($validator)
                        ->withInput();
            }
            else
            {

                $file = $request->file('file');
                $post = new Post();
                $post->title = $request->title;
                $post->author = $request->author;
                $post->file = $file->getClientOriginalName();
                $post->description = $request->description;
                $post->category_id = $request->category_id;
                $post->save();

                $path = $file->storeAs('posts' , $file->getClientOriginalName());

                return back()->with('status', '¡Articulo guardado!');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return response()->json(['post', $post]);
        
    }
}
