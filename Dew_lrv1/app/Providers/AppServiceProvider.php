<?php

namespace App\Providers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    protected $policies = [
        // akan kita isi nanti untuk Policy
    ];

    public function boot(): void
    {
        // Gate untuk mengecek apakah user adalah admin
        Gate::define('manage-products', function (User $user) {
            return $user->role === 'admin';
        });

        // Gate untuk update product (bisa admin atau owner)
        Gate::define('update-product', function (User $user, Product $product) {
            return $user->role === 'admin' || $user->id === $product->user_id;
        });

        // Gate untuk delete product (hanya admin)
        Gate::define('delete-product', function (User $user, Product $product) {
            return $user->role === 'admin';
        });

        // Gate untuk create product (user yang sudah login)
        Gate::define('create-product', function (User $user) {
            return $user !== null;
        });
    }
}