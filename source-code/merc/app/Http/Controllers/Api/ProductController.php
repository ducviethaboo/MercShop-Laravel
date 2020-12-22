<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Repository\ProductRepo;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productControllerApi;

    public function __construct(ProductRepo $productRepo)
    {
        $this->productControllerApi = $productRepo;
    }

    public function getAllProductAPI()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function showById($id)
    {
        $product = $this->productControllerApi->findById($id);
        return response()->json($product);
    }

    public function addProductApi(Request $request)
    {
        $products = Product::all();
        $request = $request->all();
        $this->productControllerApi->addProduct($request);
        return response()->json($products);
    }

    public function deleteProductApi($id)
    {
        $products = Product::all();
        $product = $this->productControllerApi->findById($id);
        $product->delete();
        return response()->json($products);
    }
}
