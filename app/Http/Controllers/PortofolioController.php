<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portofolios = Portofolio::latest()->get();
        return view('back.portofolio.index', compact('portofolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.portofolio.create');
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
            'title'                  =>  'required',
            'image'                =>  'required|mimes:png,jpg,jpeg,webp,svg|max:20480',
        ]);


        $input = $request->all();

        if ($file = $request->file('image')) {
            $destinationImage = 'back/assets/portofolio/';
            $profileFile =  $file->getClientOriginalName(); //. microtime() .'.'.$file->getClientOriginalExtension();
            $file->move($destinationImage, $profileFile);
            $input['image'] = "$profileFile";
        }

        Portofolio::create([
            'title' => $request->title,
            'slug'  => Str::slug($request->title),
            'desc'  => $request->desc,
            'image' => $input['image'],
        ]);

        return redirect()->route('admin.portofolio')->with('success', 'You have successfully created a portofolio.');
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
        $portofolio = Portofolio::find($id);
        return view('back.portofolio.edit', [
            'portofolio' => $portofolio,
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
            'title'                  =>  'required',
            'image'                =>  'mimes:png,jpg,jpeg,webp,svg|max:20480',
        ]);

        $portofolio = Portofolio::find($request->id);
        if ($portofolio) {
            $portofolio->title = $request->title;
            $portofolio->slug = Str::slug($request->title);
            $portofolio->desc = $request->desc;
            if ($request->hasFile('image')) {
                $this->deletImage($portofolio);
                if ($image = $request->file('image')) {
                    $destinationImage = 'back/assets/portofolio/';
                    $profile = $image->getClientOriginalName();
                    $image->move($destinationImage, $profile);
                    $portofolio['image'] = "$profile";
                }
            }
            $portofolio->save();
            return redirect()->route('admin.portofolio')->with('success', 'You have successfully update a portofolio.');
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
        $portofolio = Portofolio::find($request->id);
        if ($portofolio) {
            $this->deletImage($portofolio);
            $portofolio->delete();
            return redirect()->route('admin.portofolio')->with('success', 'You have successfully delete a portofolio.');
        }
        return back()->withError('Invalid portofolio.');
    }

    private function deletImage($portofolio)
    {
        if ($portofolio->image) {
            $imgDestroy = 'back/assets/portofolio/' . $portofolio->image;
            if (File::exists($imgDestroy)) {
                File::delete($imgDestroy);
            }
        }
    }
}
