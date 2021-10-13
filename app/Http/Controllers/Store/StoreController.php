<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class StoreController extends Controller
{

    public function index()
    {
        $products = Product::latest()->paginate(30);

        return view('store.index', compact('products'));
    }
}
