<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Like;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    private $post;
    private $comments;
    private $likes;

    public function __construct(Post $post, Comment $comments, Like $likes) {
        $this->post = $post;
        $this->comments = $comments;
        $this->likes = $likes;
    }

    public function createPost(Request $request){
        try {
            DB::beginTransaction();
            $post = $this->post->createPost($request);
            DB::commit();
            return $post;
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json($e->getMessage(), 500);
        }

    }

}
