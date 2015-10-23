<?php

namespace App\Http\Controllers\Blog;

use App\Comment;
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
        return view('blog.index')->with('posts',$posts);
    }

    public function post($id)
    {
        $post = $this->posts->with('users')->find($id);
        $comments = Comment::with('users')->where('post_id','=',$id)->orderBy('id','desc')->get();
        return view('blog.post')
            ->with('post',$post)
            ->with('comments',$comments);
    }
}
