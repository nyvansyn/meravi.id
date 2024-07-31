<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::with(['kategori'])->orderBy('id', 'desc')->get();
        return view('back.document.index')->with(['documents' => $documents]);
    }

    public function indexCategory()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('back.document.category.index', compact('categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('back.document.create', compact('categories'));
    }

    public function createCategory()
    {
        $categories = Category::all();
        return view('back.document.category.create', compact('categories'));
    }



    public function storeCategory(Request $request)
    {
        $request->validate([
            'name'              =>  'required',

        ]);

        $category = new Category();
        $category->name     = $request->name;
        $category->slug = Str::slug($request->name);


        $category->save();
        return redirect()->route('admin.document.category')->with('success', 'You have successfully created a Category.');
    }


    public function store(Request $request)
    {
        $request->validate([
            // 'archive_category_id'   =>  'required',
            'name'                  =>  'required',
            'path'                =>  'required|mimes:pdf,txt|max:20480',
        ]);


        $input = $request->all();

        if ($file = $request->file('path')) {
            $destinationPath = 'back/assets/doc/';
            $profileFile =  $file->getClientOriginalName(); //. microtime() .'.'.$file->getClientOriginalExtension();
            $file->move($destinationPath, $profileFile);
            $input['path'] = "$profileFile";
        }

        Document::create($input);

        return redirect()->route('admin.document')->with('success', 'You have successfully created a archive.');
    }

    public function edit($id)
    {
        $document = Document::find($id);
        $categories = Category::all();
        return view('back.document.edit', [
            'document' => $document,
            'categories' => $categories
        ]);
    }

    public function editCategory($id)
    {
        $category = Category::find($id);

        return view('back.document.category.edit', compact('category'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name'                  =>  'required',
        ]);

        $document = Document::find($request->id);
        if ($document) {
            $document->category_id = $request->category_id;
            $document->name = $request->name;
            if ($request->hasFile('path')) {
                $this->deletDocPath($document);
                if ($path = $request->file('path')) {
                    $destinationPath = 'back/assets/doc/';
                    $profilePath = $path->getClientOriginalName();
                    $path->move($destinationPath, $profilePath);
                    $document['path'] = "$profilePath";
                }
            }
            $document->save();
            return redirect()->route('admin.document')->with('success', 'You have successfully update a archive.');
        }
        return back()->withError('Invalid archive.');
    }

    public function updateCategory(Request $request)
    {
        $request->validate([
            'name'              =>  'required',
        ]);

        $category = Category::find($request->id);

        $category->name     = $request->name;
        $category->slug = Str::slug($request->name);

        $category->save();
        return redirect()->route('admin.document.category')->with('success', 'You have successfully update a category.');
    }

    public function destroy(Request $request)
    {
        $archive = Document::find($request->id);
        if ($archive) {
            $this->deletDocPath($archive);
            $archive->delete();
            return redirect()->route('admin.document')->with('success', 'You have successfully delete a archive.');
        }
        return back()->withError('Invalid archive.');
    }

    public function destroyCategory(Request $request)
    {
        $category = Category::find($request->id);

        $category->delete();
        return redirect()->route('admin.document.category')->with('success', 'You have successfully delete a category.');
    }

    private function deletDocPath($document)
    {
        if ($document->path) {
            // $imgDestroy = 'public/images/banner/'.$banner->image;
            $imgDestroy = 'back/assets/doc/' . $document->path;
            if (File::exists($imgDestroy)) {
                File::delete($imgDestroy);
            }
        }
    }

    public function download(Document $documents)
    {
        return response()->download('back/assets/doc/' . $documents->path);
    }

    public function show()
    {
        return view('front.document', [
            //  'categories' => ArchiveCategory::all(),
            'categories' => Category::where('id', '!=', 8)->get(),
            'documents' => Document::with('kategori')->where('category_id', '!=', 8)->filter(request(['search', 'category', 'sort']))->latest()->paginate(20)->withQueryString()
        ]);
    }
}
