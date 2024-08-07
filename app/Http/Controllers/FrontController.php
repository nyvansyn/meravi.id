<?php

namespace App\Http\Controllers;

use App\Models\CategoryPost;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $posts = Post::latest()->paginate(9);
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

        return view('front.blog.search', [
            'posts' => $posts,
            'search' => $search,
        ]);
    }

    public function blogShow($slug, Request $request)
    {
        $post = Post::with(['category', 'user', 'tags'])->whereSlug($slug)->first();

        // $post = Post::join('category_posts', 'category_posts.id', '=', 'posts.category_id')
        //     ->select('posts.*', 'category_posts.name')->whereSlug($slug)->first();

        // $next = Post::where('id', $post->id + 1)->pluck('slug')->first();
        $next = Post::where('id', '>', $post->id)->orderBy('id')->pluck('slug')->first();
        // $previous = Post::where('id', $post->id - 1)->pluck('slug')->first();
        $previous = Post::where('id', '<', $post->id)->orderBy('id', 'desc')->pluck('slug')->first();

        $categories =  Post::with(['category'])->select('category_id', DB::raw('COUNT(*) as count'))
            ->groupBy('category_id')
            ->get();

        // $kategori = CategoryPost::where('slug', $slug)->first();

        $search = $request->input('search');

        $posts = Post::query()
            ->where('title', 'LIKE', '%' . $search . '%')
            ->orWhere('desc', 'LIKE', '%' . $search . '%');

        $posts = $posts->latest()->paginate(6);

        $recents = Post::with(['category'])->latest()->paginate(5);

        $tags = Tag::latest()->paginate(12);

        $relatedPost = Post::where('category_id', $post->category_id)->orderBy('id', 'desc')->take(6)->get();

        return view('front.blog.show', compact('post', 'next', 'previous', 'categories', 'posts', 'recents', 'tags', 'relatedPost'));
    }
}
