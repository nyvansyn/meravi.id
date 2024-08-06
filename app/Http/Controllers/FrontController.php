<?php

namespace App\Http\Controllers;

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
        return view('front.blog.index');
    }
}
