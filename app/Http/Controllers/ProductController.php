<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Assuming you have a Product model
class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('Product-index', compact('products')); // Assuming you have a view named 'products.index'
    }

    public function create() {}


    public function store(Request $request)
    {
        Product::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'note' => $request->input('note'),
        ]);
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function show($id) {}


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('Product-edit', compact('product'));
    }


    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'note' => $request->input('note'),
        ]);
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }


    public function destroy($id) {}
}
