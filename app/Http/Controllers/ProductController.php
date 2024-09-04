<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        return view("form");
    }

    public function addProduct(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'quantity' => 'required|integer',
            'discount' => 'required|numeric',
        ]);
        product::insert([
            "name" => $request->name,
            "price" => $request->price,
            "description" => $request->description,
            "quantity" => $request->quantity,
            "discount" => $request->discount,

        ]);

        return redirect()->route('form');


    }



    public function getProducts()
    {
        $products = DB::table('products')->get();
        return view('viewproducts', compact('products'));
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('getProducts');
    }

    public function editProduct($id)
    {
        $product = product::findOrFail($id);
        return view('editProduct', compact('product'));
    }

    public function updateProduct(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'quantity' => 'required|integer',
            'discount' => 'required|numeric',
        ]);
        product::where('id', $id)->update([
            "name" => $request->name,
            "price" => $request->price,
            "description" => $request->description,
            "quantity" => $request->quantity,
            "discount" => $request->discount,
        ]);
        return redirect()->route('getProducts');
    }


}
