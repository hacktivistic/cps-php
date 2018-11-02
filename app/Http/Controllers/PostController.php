<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function save(Request $request)
    {
        $user_id = Auth::user()->id ?? 0;

        $post = Post::create([
            'ref' => str_random(20),
            'user_id' => $user_id,
            'title' => $request->title,
            'post_text' => $request->txtpost,
        ]);
        return redirect(route('viewer', ['pid' => $post->ref]));

    }

    public function view($pid)
    {
        $post = Post::where('ref', '=', $pid)->firstOrFail();
        $posts = Post::orderBy('id', 'desc')->get()->take(5);
        return view('post', ['post' => $post, 'posts' => $posts]);
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'txtpost' => 'required|string|max:255',
        ]);
    }

}
