<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['category'])
            ->paginate();

        return view('index')
            ->with([
                'products' => $products,
            ]);
    }

    public function show($id)
    {
        $products = Product::with(['category'])
            ->findOrFail($id);

        return view('show')
            ->with([
                'products' => $products,
            ]);
    }
}
