<?php

namespace App\Http\Controllers\Admin;
use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth');

    }
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index' , compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create' , compact('categories', 'tags'));
    }
}