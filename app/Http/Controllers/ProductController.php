<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Artisan;

class ProductController extends Controller
{
    public function index() 
    {
        $products = Product::all();

        return view ('product.index', [
            'products' => $products,
        ]);
    }

    public function show(Product $product)
    {
        return view('product.show', [
            'product' => $product,
        ]);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }

    public function update(Request $request, Product $product)
    {
        // Usually I would sanitize the fields with Laravel rules but I'm skipping that now.
        $product->update([
            'title' => $request->title ?? '',
            'description' => $request->description ?? '',
        ]);

        return redirect()->route('products.index');
    }

    public function reseed()
    {
        Artisan::call('migrate:refresh', ['--seed' => 'true']);

        return redirect()->route('products.index');
    }
}
