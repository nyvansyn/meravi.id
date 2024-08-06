<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function about()
    {
        return view('front.about');
    }

    public function bumdes()
    {
        return view('front.program.bumdes');
    }

    public function umkm()
    {
        return view('front.program.umkm');
    }

    public function mitra()
    {
        return view('front.client');
    }

    public function portofolio()
    {
        return view('front.portofolio');
    }

    public function blog()
    {
        $posts = Post::latest()->paginate(1);
        return view('front.blog.index', compact('posts'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        // Search in the title and description columns from the posts table
        $posts = Post::query()
            ->where('title', 'LIKE', '%' . $search . '%')
            ->orWhere('desc', 'LIKE', '%' . $search . '%');
        $posts = $posts->latest()->paginate(6);

        return view('post.search', [
            'posts' => $posts,
        ]);
    }
}
