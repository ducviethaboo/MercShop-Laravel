<?php


namespace App\Http\Controllers;


use App\Http\Requests\AddProductRequest;
use App\Models\Product;
use App\Models\ProductModel;
use App\Service\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    protected $productController;

    public function __construct(ProductService $productService)
    {
        $this->productController = $productService;
    }

    public function searchProduct(Request $request)
    {
        $key = $request->search;
        $products = DB::table('products')->where('productName', 'LIKE', '%' . $key . '%')
            ->orWhere('productType', 'LIKE', '%' . $key . '%')
            ->orWhere('productColor', 'LIKE', '%' . $key . '%')
            ->orWhere('productPrice', 'LIKE', '%' . $key . '%')->paginate(4);
        $existProduct = DB::table('products')->where('productName', 'LIKE', '%' . $key . '%')
            ->orWhere('productType', 'LIKE', '%' . $key . '%')
            ->orWhere('productColor', 'LIKE', '%' . $key . '%')
            ->orWhere('productPrice', 'LIKE', '%' . $key . '%')->exists();
        if (!$existProduct) {
            $request->session()->flash('not-found', 'Không tìm thấy sản phẩm nào!');
        }
        return view('user.shop', compact('products'));
    }

    public function findById($id)
    {
        return $this->productController->findById($id);
    }

    public function delete($id)
    {
        $this->productController->deleteByIdService($id);
        $alert='Xoá sản phẩm thành công!';
        return redirect()->route('admin.show.product')->with('alert', $alert);
    }

    public function showById($id)
    {
        $product = $this->findById($id);
        return view('admin.edit', compact('product'));
    }

    public function showProductDetail($id)
    {
        $product = $this->findById($id);
        return view('user.productdetail', compact('product'));
    }

    public function edit(AddProductRequest $request)
    {
        $productId = $request->productId;
        $productName = $request->productName;
        $productType = $request->productType;
        $productColor = $request->productColor;
        $productPrice = $request->productPrice;
        $productDesc = $request->productDesc;
        $imageName = 'images/user-img/' . time() . '.' . $request->productImg->extension();
        $request->productImg->move(public_path('images/user-img/'), $imageName);
        $productImg = $imageName;
        $product = new ProductModel($productId, $productName, $productType, $productColor, $productPrice, $productDesc, $productImg);
        $this->productController->editService($product);
        $alert='Sửa thông tin sản phẩm thành công!';
        return redirect()->route('admin.show.product')->with('alert', $alert);

    }

    public function add(AddProductRequest $request)
    {
        $product = new Product();
        $product->fill($request->all());
        $imageName = 'images/user-img/' . time() . '.' . $request->productImg->extension();
        $request->productImg->move(public_path('images/user-img/'), $imageName);
        $product->productImg = $imageName;
        $product->save();
        $alert='Thêm sản phẩm thành công!';
        return redirect()->route('admin.show.product')->with('alert', $alert);
    }

}
