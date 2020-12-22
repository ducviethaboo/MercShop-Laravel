<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function userCan($action, $option = NULL)
    {
        $user = Auth::user();
        return Gate::forUser($user)->allows($action, $option);
    }

    public function showPageGuest()
    {
        if ($this->userCan('user')) {
            abort('403', __('Bạn không có quyền thực hiện thao tác này'));
        }
        return view("user.index");
    }

    public function showPageAdmin()
    {
        if (!$this->userCan('admin.admin')) {
            abort('403', __('Bạn không có quyền thực hiện thao tác này'));
        }
        return view("admin.admin-home");
    }


}
