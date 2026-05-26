<?php

namespace App\Providers;

use App\Models\Product;
use App\Policies\ProductPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
class AuthServiceProvider  extends ServiceProvider
{
    protected $policies = [
        Product::class => ProductPolicy::class,
    ];

    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // utk mengelola produk hanya admin yg bisa
       Gate::define('manage-products', function ($user){
        return $user -> role === 'admin';
       });

        // utk update  produk hanya admin n sales yg bisa
    Gate::define('update-products', function (User $user){
        return $user -> role === 'admin' || $user -> role === 'sales';
       });

     // utk menghapus produk hanya admin yg bisa
    Gate::define('delete-products', function (User $user){
        return $user -> role === 'admin';
       });

        // utk membuat produk dilakukan oleh user yg sudah login
    Gate::define('create-products', function (User $user){
        return $user !== null;
       });

    }
}
