<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('back.testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.testimonial.create');
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
            // 'archive_category_id'   =>  'required',
            'name'                  =>  'required',
            'job_title'                  =>  'required',
            'star'                  =>  'required',
            'testimonial'                  =>  'required',
            'image'                =>  'required|mimes:png,jpg,jpeg,webp,svg|max:20480',
        ]);


        $input = $request->all();

        if ($file = $request->file('image')) {
            $destinationImage = 'back/assets/testimonial/';
            $profileFile =  $file->getClientOriginalName(); //. microtime() .'.'.$file->getClientOriginalExtension();
            $file->move($destinationImage, $profileFile);
            $input['image'] = "$profileFile";
        }

        Testimonial::create($input);

        return redirect()->route('admin.testimonial')->with('success', 'You have successfully created a archive.');
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
        $testimonial = Testimonial::find($id);
        return view('back.testimonial.edit', [
            'testimonial' => $testimonial,
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
            'job_title'                  =>  'required',
            'star'                  =>  'required',
            'testimonial'                  =>  'required',
            'image'                =>  'mimes:png,jpg,jpeg,webp,svg|max:20480',
        ]);

        $testimonial = Testimonial::find($request->id);
        if ($testimonial) {
            $testimonial->name = $request->name;
            $testimonial->job_title = $request->job_title;
            $testimonial->star = $request->star;
            $testimonial->testimonial = $request->testimonial;
            if ($request->hasFile('image')) {
                $this->deletImage($testimonial);
                if ($image = $request->file('image')) {
                    $destinationImage = 'back/assets/testimonial/';
                    $profile = $image->getClientOriginalName();
                    $image->move($destinationImage, $profile);
                    $testimonial['image'] = "$profile";
                }
            }
            $testimonial->save();
            return redirect()->route('admin.testimonial')->with('success', 'You have successfully update a testimonial.');
        }
        return back()->withError('Invalid testimonial.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $testimonial = Testimonial::find($request->id);
        if ($testimonial) {
            $this->deletImage($testimonial);
            $testimonial->delete();
            return redirect()->route('admin.testimonial')->with('success', 'You have successfully delete a testimonial.');
        }
        return back()->withError('Invalid testimonial.');
    }

    private function deletImage($testimonial)
    {
        if ($testimonial->image) {
            // $imgDestroy = 'public/images/banner/'.$banner->image;
            $imgDestroy = 'back/assets/testimonial/' . $testimonial->image;
            if (File::exists($imgDestroy)) {
                File::delete($imgDestroy);
            }
        }
    }
}
