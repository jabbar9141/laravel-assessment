<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductPriceController extends Controller
{
    public function index(User $client)
    {
        $products = Product::paginate(15);
        return view('products.index', compact('client', 'products'));
    }

    public function setProductsSpecialPrice(Request $request, User $client)
    {
        $data = $request->validate([
            'prices' => 'required|array',
            'prices.*' => 'required|numeric|min:0',
        ]);

        foreach ($data['prices'] as $productId => $price) {
            $product = Product::findOrFail($productId);
            $client->specialPrices()->updateOrCreate(
                [
                    'product_id' => $product->id
                ],
                [
                    'special_price' => $price
                ]
            );
        }

        return redirect()->route('products.index',$client)->with('success', 'Special prices updated successfully.');
    }

    public function setProductSpecialPrice(Request $request, User $client)
    {
        $request->validate([
            'special_price' => 'required|numeric|min:0',
        ]);

        $product = Product::findOrFail($request->productId);
        $client->specialPrices()->updateOrCreate(
            [
                'product_id' => $product->id
            ],
            [
                'special_price' => $request->special_price
            ]
        );
        return redirect()->route('products.index',$client)->with('success', 'Special prices updated successfully.');
    }

}
