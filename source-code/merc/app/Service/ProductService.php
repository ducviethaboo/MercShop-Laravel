<?php


namespace App\Service;


use App\Repository\ProductRepo;

class ProductService
{
    protected $productService;

    public function __construct(ProductRepo $productRepo)
    {
        $this->productService = $productRepo;
    }

    public function getAllProductNotPaginate()
    {
        return $this->productService->getAllNotPagiante();
    }

    public function getAllProductService()
    {
        return $this->productService->getAllPaginate();
    }

    public function getAllProductByAdmin()
    {
        return $this->productService->getAllByAdmin();
    }

    public function findById($id)
    {
        return $this->productService->findById($id);
    }

    public function deleteByIdService($id)
    {
        $this->productService->deleteByIdRepo($id);
    }

    public function editService($product)
    {
        $this->productService->edit($product);
    }

//    public function addService($data)
//    {
//        $this->productService->add($data);
//    }
}
