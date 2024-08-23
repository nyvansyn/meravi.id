<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\CategoryPost;
use App\Models\Client;
use App\Models\Message;
use App\Models\Portofolio;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Testimonial;
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
        $banners = Banner::latest()->take(3)->get();
        // $portofolios = Portofolio::latest()->take(9)->get();
        $clients = Client::latest()->get();
        $posts = Post::latest()->take(3)->get();
        $portofolios = Post::where('category_id', '=', 7)->latest()->take(3)->get();

        return view('front.index', compact('banners', 'posts', 'portofolios', 'clients'));
    }

    public function about()
    {
        $testimonials = Testimonial::latest()->take(9)->get();
        return view('front.about', compact('testimonials'));
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
        $clients = Client::latest()->get();
        return view('front.client', compact('clients'));
    }

    public function portofolio()
    {
        // $portofolios = Portofolio::latest()->paginate('6');
        $portofolios = Post::where('category_id', '=', 7)->latest()->paginate('6');
        return view('front.portofolio', compact('portofolios'));
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

    public function category(Request $request, $slug)
    {
        $categories = CategoryPost::where('slug', $slug)->first();

        $search = $request->input('search');

        $posts = Post::query()
            ->where('title', 'LIKE', '%' . $search . '%')
            ->orWhere('desc', 'LIKE', '%' . $search . '%');

        $posts = $posts->latest()->paginate(6);

        $postCategory = Post::join('category_posts', 'category_posts.id', '=', 'posts.category_id')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->where('category_posts.slug', $slug)
            ->select('posts.title', 'posts.cover', 'posts.created_at', 'posts.slug as post_slug', 'category_posts.name as category_name', 'users.name as user_name')
            ->paginate(6);

        return view('front.blog.category', compact('categories', 'postCategory', 'posts'));
    }

    public function tag(Request $request, $slug)
    {
        $tags = Tag::where('slug', $slug)->first();

        $search = $request->input('search');

        $posts = Post::query()
            ->where('title', 'LIKE', '%' . $search . '%')
            ->orWhere('desc', 'LIKE', '%' . $search . '%');

        $posts = $posts->latest()->paginate(6);

        //$tagJoin = Tag::join('post_tag', 'post_tag.tag_id', '=','tags.id')->select('tags.name as tag_name')->get();

        $postTag = Post::join('post_tag', 'post_tag.post_id', '=', 'posts.id')
            // ->join('tags', 'tags.id', '=', 'post_tag.tag.id')
            ->join('users', 'users.id', '=', 'posts.user_id')
            // ->where('tags.slug', $slug)
            ->select('posts.title', 'posts.cover', 'posts.created_at', 'posts.slug as post_slug', 'users.name as user_name')
            ->paginate(6);


        return view('front.blog.tag', compact('tags', 'postTag', 'posts'));
    }

    public function message(Request $request)
    {
        $request->validate([
            'name'              =>  'required',
            'email'              =>  'required',
            'whatsapp'              =>  'required',
            'subject'              =>  'required',
            'message'              =>  'required',
        ]);

        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->whatsapp = $request->whatsapp;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();

        return redirect()->route('homepage')->with('success', 'Data berhasil di kirim');
    }
}
