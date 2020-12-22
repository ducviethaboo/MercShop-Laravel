<?php


namespace App\Repository;


use App\Models\User;

class AccountRepo
{
    public function getAllAccount()
    {
        return User::all();
    }

    public function findById($id)
    {
        return $account = User::find($id);
    }

    public function editUserRole($role, $id)
    {
        $account = User::find($id);
        $account->role = $role;
        $account->save();
    }

    public function deleteAcount($id)
    {
        User::destroy($id);
    }

}
