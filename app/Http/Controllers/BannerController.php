<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::latest()->get();
        return view('back.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'                  =>  'required',
            'image'                =>  'required|mimes:png,jpg,jpeg,webp,svg|max:20480',
        ]);


        $input = $request->all();

        if ($file = $request->file('image')) {
            $destinationImage = 'back/assets/banner/';
            $profileFile =  $file->getClientOriginalName(); //. microtime() .'.'.$file->getClientOriginalExtension();
            $file->move($destinationImage, $profileFile);
            $input['image'] = "$profileFile";
        }

        Banner::create([
            'name' => $request->name,
            'slug'  => Str::slug($request->name),
            'desc'  => $request->desc,
            'link'  => $request->link,
            'image' => $input['image'],
        ]);

        return redirect()->route('admin.banner')->with('success', 'You have successfully created a banner.');
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
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('back.banner.edit', [
            'banner' => $banner,
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
        $request->validate([
            'name'                  =>  'required',
            'image'                =>  'mimes:png,jpg,jpeg,webp,svg|max:20480',
        ]);

        $banner = Banner::find($request->id);
        if ($banner) {
            $banner->name = $request->name;
            $banner->slug = Str::slug($request->name);
            $banner->desc = $request->desc;
            $banner->link = $request->link;
            if ($request->hasFile('image')) {
                $this->deletImage($banner);
                if ($image = $request->file('image')) {
                    $destinationImage = 'back/assets/banner/';
                    $profile = $image->getClientOriginalName();
                    $image->move($destinationImage, $profile);
                    $banner['image'] = "$profile";
                }
            }
            $banner->save();
            return redirect()->route('admin.banner')->with('success', 'You have successfully update a banner.');
        }
        return back()->withError('Invalid portofolio.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $banner = Banner::find($request->id);
        if ($banner) {
            $this->deletImage($banner);
            $banner->delete();
            return redirect()->route('admin.banner')->with('success', 'You have successfully delete a banner.');
        }
        return back()->withError('Invalid banner.');
    }

    private function deletImage($banner)
    {
        if ($banner->image) {
            $imgDestroy = 'back/assets/banner/' . $banner->image;
            if (File::exists($imgDestroy)) {
                File::delete($imgDestroy);
            }
        }
    }
}
