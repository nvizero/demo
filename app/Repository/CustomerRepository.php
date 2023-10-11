<?php

namespace App\Repository;

use App\Models\Customer;
use Illuminate\Support\Str;

class CustomerRepository
{
    public function store($request)
    {
        $salt = Str::random(6);
        $customer = new Customer();
        $customer->account = $request['account'];
        $customer->name = isset($request['name']) ? $request['name'] : "";
        $customer->email = $request['email'];
        $customer->password = customerPwd($request['password'], $salt);
        $customer->salt = $salt;
        $customer->status = 1;
        if ($customer->save()) {
            return $customer;
        } else {
            return false;
        }
    }

    public function update($id, $datas)
    {         
        $customer = new Customer();
        $customer = $customer->find($id);
        foreach ($datas as $key => $val) {
            $customer->$key = $val;
        }
        return $customer->save();
    }
}
