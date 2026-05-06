<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = [
            [
                'id' => 1,
                'name' => 'PT Sumber Makmur',
                'phone' => '021-12345678',
                'address' => 'Jl. Sudirman No. 123, Jakarta Pusat'
            ],
            [
                'id' => 2,
                'name' => 'CV Mitra Jaya',
                'phone' => '022-87654321',
                'address' => 'Jl. Raya Bandung No. 45, Bandung'
            ],
            [
                'id' => 3,
                'name' => 'UD Sejahtera Bersama',
                'phone' => '031-11223344',
                'address' => 'Jl. Pemuda No. 67, Surabaya'
            ],
            [
                'id' => 4,
                'name' => 'PT Global Supplier',
                'phone' => '024-99887766',
                'address' => 'Jl. Pandanaran No. 89, Semarang'
            ],
            [
                'id' => 5,
                'name' => 'CV Cahaya Abadi',
                'phone' => '0274-556677',
                'address' => 'Jl. Malioboro No. 12, Yogyakarta'
            ]
        ];

        return view('supplier.index', [
            'title' => 'Daftar Supplier',
            'suppliers' => $suppliers
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        $supplier = [
            'id' => $id,
            'name' => 'PT Sumber Makmur',
            'phone' => '021-12345678',
            'address' => 'Jl. Sudirman No. 123, Jakarta Pusat'
        ];

        return view('supplier.detail', [
            'id' => $id,
            'title' => 'Detail Supplier',
            'supplier' => $supplier
        ]);
    }

    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}