<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Commentary;

class VisitorsController extends Controller
{
    public function index()
    {
    	$posts = Post::orderBy('created_at', 'DESC')
    		->simplePaginate(15);

    	return view('home.index', compact('posts'));
    }

    public function category($category)
    {
    	$posts = Post::where('category_id' , $category)
    		->simplePaginate(15);
    	
    	return view('home.category', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);
        $comments = Commentary::where('post_id' , $id)->get();

        return view('home.show', compact('post', 'comments'));
    }
}
