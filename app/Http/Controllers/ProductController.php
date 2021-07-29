<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        if (request()->categorie) {
            $products = Product::with('categories')->whereHas('categories', function($query) {
                $query->where('slug', request()->categorie);
            })->paginate((6));
        } else {
            $products = Product::with('categories')->paginate(6);
        }
        
        return view('products.index', compact('products'));
    }

    public function show($slug) {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('products.show', compact('product'));
    }
    public function search() {

        request()->validate([
            'search' => 'required|min:3'
        ]);

        $q = request()->input('search');
        $products = Product::where('title', 'like', "%$q%")->orWhere('description', 'like', "%$q%")->paginate(6);
        return view('products.search', compact('products'));
    }

}
