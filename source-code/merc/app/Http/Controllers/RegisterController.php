<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\TestDriverRegisterRequest;
use App\Models\Product;
use App\Service\TestDriverService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected $testDriverController;

    public function __construct(TestDriverService $testDriverService)
    {
        $this->testDriverController = $testDriverService;
    }

    public function testDriverRegister(TestDriverRegisterRequest $request)
    {
        $testDriverInfo = $request->all();
        $this->testDriverController->registerTestDriverService($testDriverInfo);
        $alert = "Đăng ký lái thử thành công, vui lòng kiểm tra Email để xác nhận thông tin";
        return redirect()->route('user.testDriveRegister')->with('alert', $alert);
    }
}
