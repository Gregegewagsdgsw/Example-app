<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product:: all();
        $buyer = Buyer::find(2);
        return view('products.index', compact('products'));
    }
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
     public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request, Product $product)
    {
        
        $data = $request -> validate([
            'name' => 'string|required',
            'price' => 'required|decimal:0,2',
            'description' => 'string'
        ]);
    
        $product->create($data);
        return redirect()->back();
    }

    public function edit(Product $product){
        return view('products.edit', compact('product'));
    }
    public function update(Request $request, Product $product)
    {
        $data = $request -> validate([
            'name' => 'string|required',
            'price' => 'required|decimal:0,2',
            'description' => 'string'
        ]);
        $product->create($data);
        return redirect()->back();
    }
}
