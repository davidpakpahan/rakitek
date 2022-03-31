<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $kategori = Category::all();

        return view("category.index", compact("kategori"));
    }

    public function add_category()
    {
        return view("category.add");
    }

    public function process_add(Request $request)
    {
        $kategori = new Category;
        $kategori->nama = $request->input('nama');
        $kategori->save();

        return redirect("category")->with("status", "Produk berhasil ditambahkan");
    }

    public function edit($id)
    {
        $kategori = Category::find($id);

        return view("category.edit", compact("kategori"));
    }

    public function update(Request $request, $id)
    {
        $kategori = Category::find($id);
        $kategori->nama = $request->input('nama');
        $kategori->update();

        return redirect('category')->with('status', 'Data Kategori berhasil di update');
    }

    public function delete($id)
    {
        $kategori = Category::find($id);
        $kategori->delete();

        return redirect('category')->with('status', 'Data Kategori berhasil di hapus');
    }
}
