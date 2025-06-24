<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Storage;
use Str;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::latest()->get();

        $title = 'Hapus Data!';
        $text = "Apakah anda yakin?";
        confirmDelete($title, $text);

        return view('product.index', compact('product'));
    }

    public function create()
    {
        $category = Category::all(); // untuk select option
        return view('product.create', compact('category'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|unique:categories',
            'category_id' => 'required',
            'price'       => 'required|numeric',
            'description' => 'required',
            'stock'       => 'required|numeric',
            'image'       => 'required|image|mimes:jpg,png|max:1024',
        ]);

        $product = new Product();
        $product->name        = $request->name;
        $product->slug        = Str::slug($request->name, '-');
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->price       = $request->price;
        $product->stock       = $request->stock;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $randomName = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('products', $randomName, 'public');
            $product->image = $path;
        }

        $product->save();
        toast('Data berhasil disimpan', 'success');
        return redirect()->route('product.index');
    }

    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view('product.show', compact('product'));
    }

    public function edit(string $id)
    {
        $product  = Product::findOrFail($id);
        $category = Category::all();
        return view('product.edit', compact('product', 'category'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name'        => 'required|unique:categories',
            'category_id' => 'required',
            'price'       => 'required|numeric',
            'description' => 'required',
            'stock'       => 'required|numeric',
            //  'image'       => 'image|mimes:jpg,png',
        ]);

        $product = Product::findOrFail($id);
        $product->name        = $request->name;
        $product->slug        = Str::slug($request->name, '-');
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->price       = $request->price;
        $product->stock       = $request->stock;

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($product->image);
            $file = $request->file('image');
            $randomName = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('products', $randomName, 'public');
            $product->image = $path;
        }

        $product->save();
        toast('Data berhasil disimpan', 'success');
        return redirect()->route('product.index');
    }

    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        Storage::disk('public')->delete($product->image);
        $product->delete();
        toast('Data berhasil dihapus', 'success');
        return redirect()->route('product.index');
    }
}