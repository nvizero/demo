<?php

namespace App\Services;

use App\Repository\CustomerRepository;
use Illuminate\Support\Str;
use Hash;
class CustomerService
{
    function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    //註冊
    public function saveData($request)
    {
        return $this->customerRepository->store($request);
    }

    //重設密碼
    public function resetPwd($userId, $pwd)
    {
        
        $salt = Str::random(6);
        $datas["salt"] = $salt;
        $aftPwd = md5(md5($pwd) . $salt);
        $datas["password"] = $aftPwd;
        return $this->customerRepository->update($userId, $datas);
    }
}
