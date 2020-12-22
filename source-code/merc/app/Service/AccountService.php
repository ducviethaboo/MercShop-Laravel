<?php


namespace App\Service;


use App\Repository\AccountRepo;
use App\Repository\ProductRepo;

class AccountService
{
    protected $account;
    public function __construct(AccountRepo $accountRepo)
    {
        $this->account = $accountRepo;
    }

    public function getAllAccountService()
    {
        return $this->account->getAllAccount();
    }

    public function findByIdService($id)
    {
        return $this->account->findById($id);
    }

    public function editUserRoleService($role, $id)
    {
        $this->account->editUserRole($role, $id);
    }

    public function deleteAccount($id)
    {
        $this->account->deleteAcount($id);
    }
}
