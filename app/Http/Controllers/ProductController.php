<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with("category")->orderBy("view", "desc")->get();
        return view("product.list", compact("products"));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view("product.add", compact("category"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->view = $request->view;
        $product->save();

        return redirect()->route("product.index")->with('success', "Đã thêm sản phẩm thành công");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::all();
        $product = Product::find($id);
        return view("product.edit", compact("product", "category"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        if (!isset($product)) {
            return redirect()->route("product.index")->with('error', "Sản phẩm không tìm thấy");
        }

        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->view = $request->view;
        $product->save();

        return redirect()->route("product.index")->with('success', "Đã cập nhật sản phẩm thành công");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);

        if (!isset($product)) {
            return redirect()->route("product.index")->with('error', "Sản phẩm không tìm thấy");
        }
        $product->delete();
        return redirect()->route("product.index")->with('success', "Đã xoá sản phẩm");
    }

    public function search(Request $request)
    {
        $products = Product::with("category")->where("name", "like", "%" . $request->search . "%")->get();
        return view("product.list", compact("products"));
    }
}
