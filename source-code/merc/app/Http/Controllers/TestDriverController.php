<?php

namespace App\Http\Controllers;

use App\Service\TestDriverService;
use Illuminate\Http\Request;

class TestDriverController extends Controller
{
    //
    protected $testDriver;

    public function __construct(TestDriverService $testDriverService)
    {
        $this->testDriver = $testDriverService;
    }

    public function getAll()
    {
        $testDriversList = $this->testDriver->getAll();
        return view('admin.test-driver-list', compact('testDriversList'));
    }

    public function getAllById($id)
    {
        $userEdit = $this->testDriver->getAllById($id);
        return view('admin.edit-test-drivers', compact('userEdit'));
    }

    public function editStatusTest(Request $request)
    {
        $id = $request->id;
        $status = $request->status;
        $this->testDriver->updateStatus($id, $status);
        $alert = "Cập nhật thành công";
        return redirect()->route('admin.test-driver-list')->with('alert', $alert);
    }
}
