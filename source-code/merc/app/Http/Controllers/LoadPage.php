<?php

namespace App\Http\Controllers;

use App\Service\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LoadPage extends Controller
{
    protected $pageController;

    public function __construct(ProductService $productService)
    {
        $this->pageController = $productService;
    }

    public function showAdminHomePage()
    {
        return view('admin.admin-home');
    }
    public function HomePageLoad()
    {
        return view('user.index');
    }
    public function showAdminPage()
    {
        $products = $this->pageController->getAllProductByAdmin();
        return view('admin.admin', compact('products'));
    }

    public function showPageUserLogin()
    {
        return view('user.login');
    }

    public function showPageUserRegister()
    {
        return view('user.register');
    }

    public function showProductUser()
    {
        $products = $this->pageController->getAllProductService();
        return view('user.shop', compact('products'));
    }

    public function PageRegisterTestDriverLoad()
    {
        $products = $this->pageController->getAllProductNotPaginate();
        return view('user.test-drive-register', compact('products'));
    }

    public function showFormBuy()
    {
        return view('user.user-form-buy');
    }

    public function showFormAddByAdmin()
    {
        return view('admin.add');
    }


}
