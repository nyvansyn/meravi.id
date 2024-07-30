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
        $documents = Document::orderBy('id', 'desc')->get();
        $categories = Category::all();
        return view('admin.documents$documents.index')->with(['documents' => $documents, 'categories' => $categories]);
    }

    public function indexCategory()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('back.document.category.index', compact('categories'));
    }

    public function create()
    {
        $Arcives   = Document::all();
        $categories = Category::all();
        return view('admin.archives.create', compact('categories'));
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
            $destinationPath = 'public/archive/';
            $profileFile =  $file->getClientOriginalName(); //. microtime() .'.'.$file->getClientOriginalExtension();
            $file->move($destinationPath, $profileFile);
            $input['path'] = "$profileFile";
        }

        Document::create($input);

        return redirect()->route('admin.archives')->with('success', 'You have successfully created a archive.');
    }

    public function edit($id)
    {
        $archive = Document::find($id);
        $categories = Category::all();
        return view('admin.archives.edit', [
            'archive' => $archive,
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

        $archive = Document::find($request->id);
        if ($archive) {
            $archive->name = $request->name;
            if ($request->hasFile('path')) {
                $this->deletArchivePath($archive);
                if ($path = $request->file('path')) {
                    $destinationPath = 'public/archive/';
                    $profilePath = $path->getClientOriginalName() . microtime();
                    $path->move($destinationPath, $profilePath);
                    $archive['path'] = "$profilePath";
                }
            }
            $archive->save();
            return redirect()->route('admin.archives')->with('success', 'You have successfully update a archive.');
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
            $this->deletArchivePath($archive);
            $archive->delete();
            return redirect()->route('admin.archives')->with('success', 'You have successfully delete a archive.');
        }
        return back()->withError('Invalid archive.');
    }

    public function destroyCategory(Request $request)
    {
        $category = Category::find($request->id);

        $category->delete();
        return redirect()->route('admin.document.category')->with('success', 'You have successfully delete a category.');
    }

    private function deletArchivePath($archive)
    {
        if ($archive->path) {
            // $imgDestroy = 'public/images/banner/'.$banner->image;
            $imgDestroy = 'public/archive/' . $archive->path;
            if (File::exists($imgDestroy)) {
                File::delete($imgDestroy);
            }
        }
    }

    public function download(Document $archives)
    {
        return response()->download('public/archive/' . $archives->path);
    }

    public function show()
    {
        return view('frontend.download.index', [
            //  'categories' => ArchiveCategory::all(),
            'categories' => Category::where('id', '!=', 8)->get(),
            'archives' => Document::with('archiveCategory')->where('archive_category_id', '!=', 8)->filter(request(['search', 'category', 'sort']))->latest()->paginate(20)->withQueryString()
        ]);
    }
}
