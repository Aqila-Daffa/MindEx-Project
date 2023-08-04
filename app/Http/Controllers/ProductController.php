<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $prod = Product::latest()->get();
        return view('client-features/product/prodList', compact('prod'));
    }

    public function prodDetail(){
        $pName = $_GET["name"];
        $pDetail = Product::where('name', $pName)->get();
        return view('client-features/product/proDetail', compact('pDetail'));
    }
}
