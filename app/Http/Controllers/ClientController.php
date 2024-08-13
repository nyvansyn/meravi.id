<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::latest()->get();
        return view('back.client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.client.create');
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
            $destinationImage = 'back/assets/client/';
            $profileFile =  $file->getClientOriginalName(); //. microtime() .'.'.$file->getClientOriginalExtension();
            $file->move($destinationImage, $profileFile);
            $input['image'] = "$profileFile";
        }

        Client::create([
            'name' => $request->name,
            'slug'  => Str::slug($request->name),
            'image' => $input['image'],
        ]);

        return redirect()->route('admin.client')->with('success', 'You have successfully created a client.');
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
        $client = Client::find($id);
        return view('back.client.edit', [
            'client' => $client,
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

        $client = Client::find($request->id);
        if ($client) {
            $client->name = $request->name;
            $client->slug = Str::slug($request->name);
            if ($request->hasFile('image')) {
                $this->deletImage($client);
                if ($image = $request->file('image')) {
                    $destinationImage = 'back/assets/client/';
                    $profile = $image->getClientOriginalName();
                    $image->move($destinationImage, $profile);
                    $client['image'] = "$profile";
                }
            }
            $client->save();
            return redirect()->route('admin.client')->with('success', 'You have successfully update a client.');
        }
        return back()->withError('Invalid client.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $client = Client::find($request->id);
        if ($client) {
            $this->deletImage($client);
            $client->delete();
            return redirect()->route('admin.client')->with('success', 'You have successfully delete a banner.');
        }
        return back()->withError('Invalid banner.');
    }

    private function deletImage($client)
    {
        if ($client->image) {
            $imgDestroy = 'back/assets/client/' . $client->image;
            if (File::exists($imgDestroy)) {
                File::delete($imgDestroy);
            }
        }
    }
}
