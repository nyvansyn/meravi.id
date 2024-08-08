<?php

namespace App\Http\Controllers;

use App\Models\CategoryPost;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use DOMDocument;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();
        return view('back.post.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CategoryPost::all();
        $tags       = Tag::all();
        return view('back.post.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "title"     => "required",
            "cover"     => "required",
            "desc"      => "required",
            "category_id"  => "required",
            "tags"      => "required",
            "keywords"  => "required",
            "meta_desc" => "required",
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($image = $request->file('cover')) {
            $packagePath = 'back/assets/img/article';
            $packageImages = $image->getClientOriginalName();
            $image->move($packagePath, $packageImages);
            $input['cover'] = "$packageImages";
        }

        $content = $request->desc;
        $dom = new DOMDocument();
        $dom->loadHTML($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $imageFile = $dom->getElementsByTagName('img');

        foreach ($imageFile as $item => $image) {
            $data = $image->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name = "/back/assets/img/article/" . time() . $item . '.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);

            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }

        $content = $dom->saveHTML();


        $post               = new Post();

        $post->title        = $request->title;
        $post->slug         = Str::slug($request->title);
        $post->user_id      = Auth::user()->id;
        $post->category_id  = $request->category_id;
        $post->desc         = $content;
        $post->keywords     = $request->keywords;
        $post->meta_desc    = $request->meta_desc;
        $post->cover        = $input['cover'];
        $post->save();

        $post->tags()->attach($request->tags);


        return redirect()->route('admin.post')->with('success', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $post = Post::with(['category', 'tags', 'user'])->find($request->id);
        $categories = CategoryPost::all();
        $tags = Tag::all();
        return view('back.post.edit', [
            'post' => $post,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            "title"     => "required|unique:posts,title," . $id,
            "desc"      => "required",
            "category_id"  => "required",
            "tags"      => "array|required",
            "keywords"  => "required",
            "meta_desc" => "required",
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $post = Post::find($request->id);

        $content = $request->desc;
        libxml_use_internal_errors(true);
        $dom = new DOMDocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD | libxml_use_internal_errors(true));
        $imageFile = $dom->getElementsByTagName('img');

        foreach ($imageFile as $item => $image) {
            $data = $image->getAttribute('src');
            if (strpos($data, ';') === false) {
                continue;
            }
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name = "/back/assets/img/article/" . time() . $item . '.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);

            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }

        $content = $dom->saveHTML();
        if ($post) {
            $post->category_id = $request->category_id;
            $post->title = $request->title;
            $post->slug = Str::slug($request->title);
            $post->keywords = $request->keywords;
            $post->meta_desc = $request->meta_desc;
            $post->desc = $content;
            $post->user_id = Auth::user()->id;;
            if ($request->hasFile('cover')) {
                $this->deleteBlogImage($post);
                if ($image = $request->file('cover')) {
                    $postPath = '/back/assets/img/article';
                    $postImage = $image->getClientOriginalName();
                    $image->move($postPath, $postImage);
                }
                $post->cover = $input['cover'] = "$postImage";
            }

            $post->save();

            $post->tags()->sync($request->tags);

            return redirect()->route('admin.post')->with('success', 'Data updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $blog = Post::find($request->id);

        $dom = new DOMDocument();
        $dom->loadHTML($blog->desc, 9);
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {

            $src = $img->getAttribute('src');
            $path = Str::of($src)->after('/');


            if (File::exists($path)) {
                File::delete($path);
            }
        }

        $this->deleteBlogImage($blog);
        $blog->tags()->detach();
        $blog->delete();

        return redirect()->route('admin.post');
    }

    private function deleteBlogImage($post)
    {
        if ($post->cover) {
            $imgDestroy = 'back/assets/img/article/' . $post->cover;
            if (File::exists($imgDestroy)) {
                File::delete($imgDestroy);
            }
        }
    }
}
