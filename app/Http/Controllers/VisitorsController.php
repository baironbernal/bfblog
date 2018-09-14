<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class VisitorsController extends Controller
{
    public function index()
    {
    	$posts = Post::where('status' , 1)
            ->orderBy('created_at', 'DESC')
    		->simplePaginate(15);

    	return view('home.index', compact('posts'));
    }

    public function category($category)
    {
    	$posts = Post::where([
                ['category_id', $category],
                ['status', 1],
            ])
    		->simplePaginate(15);
    	
    	return view('home.category', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);
        $comments = Comment::where('post_id' , $id)->get();

        return view('home.show', compact('post', 'comments'));
    }
}
