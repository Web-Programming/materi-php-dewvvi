<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $title = "Daftar Produk";
        
        $product = [
        ['id' => 1, 'name' => 'Laptop' , 'price' => 7500000],
        ['id' => 2, 'name' => 'Mouse' , 'price' => 1500000],
        ['id' => 3, 'name' => 'Keyboard' , 'price' => 3000000],
        ['id' => 4, 'name' => 'Monitor' , 'price' => 2500000],
    ];

        return view('produk.index', compact('title', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "Detail Produk";
        $product = ['id' => 4, 'name' => 'Monitor' , 'price' => 2500000];
        return view('produk.detail', compact('id', 'product', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('produk.edit', ['id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    function search(Request $request)
    {
        return view('produk.search');
    }
}
