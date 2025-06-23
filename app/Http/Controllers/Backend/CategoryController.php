<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::latest()->get();

        $title = 'Hapus Data!';
        $text  = "Apakah Anda Yakin?!";
        confirmDelete($title, $text);

        return view('category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'name' => 'required|unique:categories',
        ]);

        $category    =new Category();
        $category->name =$request->name;
        $category->slug = Str::slug($request->name, '-');
        $category->save();
        toast('Data Berhasil DIsimpan', 'succes');
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        $category    = Category::findOrFail($id);
        $category->name =$request->name;
        $category->slug = Str::slug($request->name, '-');
        $category->save();
        toast('Data Berhasil Di Edit', 'succes');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category    = Category::findOrFail($id);
        $category->delete();
        toast('Data Berhasil Di Hapus', 'succes');
        return redirect()->route('category.index');
    }
}
