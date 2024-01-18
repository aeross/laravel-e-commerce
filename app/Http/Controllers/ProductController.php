<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home()
    {
        $products = Product::all();
        return view('home', ['products' => $products]);
    }

    public function add()
    {
        return view('add');
    }

    public function edit(Product $product)
    {
        return view('edit', ['product' => $product]);
    }

    public function delete(Product $product)
    {
        $product->delete();
        return redirect("/");
    }

    public function submitAdd(Request $req)
    {
        $input = $req->validate([
            "name" => "required",
            "price" => "required"
        ]);

        Product::create($input);

        return redirect('/');
    }

    public function submitEdit(Product $product, Request $req)
    {
        $input = $req->validate([
            "name" => "required",
            "price" => "required"
        ]);

        $product->update($input);

        return redirect('/');
    }
}
