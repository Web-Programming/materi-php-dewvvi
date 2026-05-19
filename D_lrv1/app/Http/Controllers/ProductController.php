<?php

namespace App\Http\Controllers;

use App\Models\Product; //Tambahkan Manual
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $title = 'Daftar Produk';

        // $products = [
        //     ['id' => 1, 'name' => 'Laptop', 'price' => 15000000],
        //     ['id' => 2, 'name' => 'Mouse', 'price' => 5000000],
        //     ['id' => 3, 'name' => 'Keyboard', 'price' => 3000000],
        //     ['id' => 4, 'name' => 'Monitor', 'price' => 2000000]
        // ];
        // $products = Product::all(); //cara 1
        // $products = DB::select('SELECT * FROM products'); //cara 2
        // $products = DB::table('products')->get(); //cara 3
        $products = Product::paginate(10); //cara 4 pagination

        return view('produk.index', compact('title', 'products'));
        // return view('produk.index', [
        //     'products' => $products,
        //     'title' => $title
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Produk';
        return view('produk.create', compact('title'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'status' => 'required|in:new,used',
            'is_active' => 'nullable|boolean',
            'release_date' => 'nullable|date',
        ], [
            'name.required' => 'Nama produk wajib diisi.',
            'name.max' => 'Nama produk maksimal 100 karakter.',
            'price.required' => 'Harga produk wajib diisi.',
            'price.numeric' => 'Harga produk harus berupa angka.',
            'price.min' => 'Harga produk tidak boleh negatif.',
            'status.required' => 'Status produk wajib dipilih.',
            'status.in' => 'Status produk harus new atau used.',
            'release_date.date' => 'Format tanggal rilis tidak valid.',
        ]); // validasi input
        $validated['is_active'] = $request->has('is_active') ? 1 : 0; // tangani checkbox
        Product::create($validated); // simpan ke DB
        return redirect()->route('produk.index')
            ->with('success', 'Produk berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $title = 'Detail Produk';
        $product = Product::findOrFail($id); // 404 otomatis jika tidak ditemukan
        return view('produk.detail', compact('product', 'title'));
    }

    public function edit(string $id)
    {
        $title = "Edit Produk";
        $product = Product::findOrFail($id);
        return view('produk.edit', compact('product', 'title'));
    }

    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'status' => 'required|in:new,used',
            'is_active' => 'nullable|boolean',
            'release_date' => 'nullable|date',
        ], [
            'name.required' => 'Nama produk wajib diisi.',
            'name.max' => 'Nama produk maksimal 100 karakter.',
            'price.required' => 'Harga produk wajib diisi.',
            'price.numeric' => 'Harga produk harus berupa angka.',
            'price.min' => 'Harga produk tidak boleh negatif.',
            'status.required' => 'Status produk wajib dipilih.',
            'status.in' => 'Status produk harus new atau used.',
            'release_date.date' => 'Format tanggal rilis tidak valid.',
        ]);
        $validated['is_active'] = $request->has('is_active') ? 1 : 0;
        $product->update($validated);
        return redirect()->route('produk.index')
            ->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('produk.index')
            ->with('success', 'Produk berhasil dihapus.');
    }

    public function search()
    {
    return view('produk.search', [
        'title' => 'Cari Produk'
    ]);
    }
}
