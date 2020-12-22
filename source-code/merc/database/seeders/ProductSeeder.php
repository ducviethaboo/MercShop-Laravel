<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->productName = "ssdsd";
        $product->productType = "sad";
        $product->productColor = "yelsdsadlow";
        $product->productPrice = "1000sdsd03030303030";
        $product->save();
    }
}
