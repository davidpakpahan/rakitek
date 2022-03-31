<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $kategori = Product::all();

        return view('product.index', compact("kategori"));
    }

    public function add_product(Product $product)
    {
        $kategori = Category::all();

        return view('product.add', compact("kategori", "product"));
    }

    public function process_add(Request $request)
    {
        $produk = new Product();
        $produk->category_id = $request->input('category_id');
        $produk->nama = $request->input('nama');
        $produk->harga = $request->input('harga');
        $produk->save();

        return redirect("product")->with("status", "Produk berhasil ditambahkan");
    }
}
