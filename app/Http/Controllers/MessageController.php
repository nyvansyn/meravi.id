<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::latest()->get();
        return view('back.message.index', compact('messages'));
    }

    public function destroy($id)
    {
        $tag = Message::findOrFail($id);
        $tag->delete();

        return redirect()->route('admin.message')->with('success', 'Data Deleted Successfully');
    }
}
