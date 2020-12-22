<?php


namespace App\Service;


use App\Repository\TestDriverRepo;

class TestDriverService
{
    protected $testDriverService;

    public function __construct(TestDriverRepo $testDriverRepo)
    {
        $this->testDriverService = $testDriverRepo;
    }

    public function registerTestDriverService($testDriverInfo)
    {
        $this->testDriverService->registerTestDriver($testDriverInfo);
    }

    public function getAll()
    {
        return $this->testDriverService->getAll();
    }

    public function getAllById($id)
    {
        return $this->testDriverService->getAllById($id);
    }

    public function updateStatus($id, $status)
    {
        $this->testDriverService->updateStatus($id, $status);
    }
}
