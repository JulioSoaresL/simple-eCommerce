<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    public function listAll()
    {
        return Product::paginate(10);
    }
}
