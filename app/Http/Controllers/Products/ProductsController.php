<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Product\Cart;
use Illuminate\Support\Facades\Redirect;

class ProductsController extends Controller
{
    public function singleProduct($id)
    {
        if ($id != null) {
            $product = Product::find($id);

            $relatedProducts = Product::where('type', $product->type)->where('id', '!=', $id)->take('4')->orderBy('id', 'desc')->get();
        }

        $checkingInCart = Cart::where('prd_id', $id)->where('user_id', Auth::user()->id)->count();

        return view('products.productsingle', compact('product', 'relatedProducts', 'checkingInCart'));
    }

    public function addToCart(Request $request, $id)
    {
        $addToCart = Cart::create([
            "prd_id" => $request->prd_id,
            "name" => $request->name,
            "price" => $request->price,
            "user_id" => Auth::user()->id
        ]);
        return Redirect::route('product.single', $id)->with(['success' => "product added to cart successfully"]);
    }

    public function cart()
    {
        $cart = Cart::where('user_id', Auth::user()->id)
            ->orderBy('id', 'desc')
            ->get();

        return view('products.cart', compact('cart'));
    }
}
