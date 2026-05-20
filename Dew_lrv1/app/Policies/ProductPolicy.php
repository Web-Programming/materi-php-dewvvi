<?php

namespace App\Policies;

use App\Models\Product;

class DashboardController extends Controller
{
    public function create (User $user):bool{
        return in_array ($user -> role, ['sales']);
    }

        public function update (User $user, Product $product):bool{
        return in_array ($user -> role, ['admin', 'sales']);
    }

    public function delete (User $user, Product $product):bool{
        return $user -> role === 'admin';
    }

    public function restore (User $user, Product $product):bool{
        return $user -> role === 'admin';
    }
}
