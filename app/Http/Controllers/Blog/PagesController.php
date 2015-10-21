<?php

namespace App\Http\Controllers\Blog;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * @var Post
     */
    public $posts;

    public function __construct(Post $post)
    {
        $this->posts = $post;
    }

    public function index()
    {
        $posts = $this->posts->with('users')->paginate(10);
        return view('index')->with('posts',$posts);
    }
}
