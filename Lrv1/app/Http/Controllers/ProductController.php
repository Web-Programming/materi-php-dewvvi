<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class productController extends Controller{
    public function index(){ 
    $title = "Daftar Produk";
    $products = DB::table('products') -> get();

    return view ('produk.index', compact('title', 'products'));
    }
}