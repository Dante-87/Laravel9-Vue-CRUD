<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all()->toArray();
        return response()->json($products);

    }
    public function store(Request $request)
    {
        $date = date('Y-m-d H:i:s');
        $timestamp = Carbon::createFromFormat('Y-m-d H:i:s', $date);

        $product = new Product([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'created_at' => $timestamp,
            'updated_at' => $timestamp,
        ]);
        $product->save();
        return response()->json('¡Producto creado!');
    }

    public function show($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }

    public function update($id, Request $request)
    {
        $date = date('Y-m-d H:i:s');
        $timestamp = Carbon::createFromFormat('Y-m-d H:i:s', $date);

        $product = Product::find($id);
        $product['updated_at'] = $timestamp;
        $product->update($request->all());
        return response()->json('¡Producto actualizado!');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return response()->json('¡Product borrado!');
    }
}
