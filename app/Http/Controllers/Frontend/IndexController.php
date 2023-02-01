<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;

use Illuminate\Http\Request;


class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::with(['media', 'user'])
            ->whereHas('category', function ($query) {
                $query->whereStatus(1);
            })
            ->whereHas('user', function ($query) {
                $query->whereStatus(1);
            })
         ->orderBy('id', 'desc')->paginate(5);

        return view('frontend.index', compact('posts'));
    }

}
