<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('product_cards')
            ->join('carts', 'carts.id', '=', 'product_cards.cart_id')
            ->join('products', 'product_cards.product_id', '=', 'products.id')
            ->select('product_cards.*', 'products.name', 'products.price')
            ->get();
        $data = json_decode($data, true);

        return view('cart', ['data' => $data]);
    }

    /**
     * Add new item to cart.
     */
    public function create(Product $product)
    {
        ProductCard::create([
            'product_id' => $product['id'],
            'cart_id' => 1
        ]);

        return redirect('/cart');
    }

    /**
     * Clear all items from the cart.
     */
    public function destroyAll()
    {
        //
    }
}
