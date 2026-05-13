<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $title = "Daftar Produk";
        // $products = [
        //     ['id' => 1, 'name' => 'Laptop', 'price' => 7500000],
        //     ['id' => 2, 'name' => 'Mouse', 'price' => 150000],
        //     ['id' => 3, 'name' => 'Keyboard', 'price' => 300000],
        //     ['id' => 4, 'name' => 'Monitor', 'price' => 2500000],
        // ];

        //$products = Product::all(); //cara 1
        //$products = DB::select('SELECT * FROM products'); //cara 2
        //$products = DB::table('products')->get(); //cara 3
        $products = Product::paginate(10); //cara 4 dengan pagination
        return view('produk.index', compact('title', 'products'));

        //return view('produk.index', [
        //    'products' => $products, 
        //    'title' => $title
        //]);
    }

    public function create()
    {
        $title = 'Tambah Produk';
        return view('produk.create');
    }

    public function store(Request $request)
    {
        $validated = $request -> validate ([
            'name'=> 'required|String|max:100',
            'price' => 'required|number|min:0',
            'description' => 'nullable|string',
            'status'=>  'required|in:new, used',
            'is_active' => 'nullable|boolean',
            'release_data'=> 'nullable|date'
        ], [
            'name.required' => 'nama prodk wajib diisi.',
            'name.max' => 'nama produk maksimal 100 kata',
            'price.required' => 'harga produk harus diatas 0'
        ]);
    }


    public function show(string $id)
    {
        $title = "Detail Produk";
        $product = ['id' => $id, 'name' => 'Monitor', 'price' => 2500000];
        return view('produk.detail', compact('id', 'product', 'title'));
    }

    public function edit(string $id)
    {
        return view('produk.edit', ['id' => $id]);
    }

    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }

    function search(Request $request)
    {
        return view('produk.search');
    }
}