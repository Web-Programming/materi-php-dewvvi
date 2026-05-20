<?php

namespace App\Models;

use App\Policies\ProductPolicy;
use Illuminate\Database\Eloquent\Factories\Attribute;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

#[UsePolicy(ProductPolicy::class)]

class Product extends Model
{
    use HasFactory;
    //jika nama tabel tidak sesuai dengan konvensi, 
    //maka kita bisa mendefinisikan nama tabel secara eksplisit
    protected $table = 'products';

    protected $fillable = [
        'name',
        'price',
        'description',
        'status',
        'is_active',
        'release_date',
    ];
}
