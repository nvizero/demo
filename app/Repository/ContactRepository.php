<?php
namespace App\Repository;

use App\Models\Contact;
use Illuminate\Support\Str;

class ContactRepository
{
    public function store($request)
    {
        $salt = Str::random(6);
        $customer = new Contact();
        $customer->name = $request['contact_sex'].$request['firstname'].$request['lastname'];
        $customer->telegram = $request['ctel'];
        $customer->telegram2 = $request['email'];
        $customer->text = $request['msg'];
        if ($customer->save()) {
            return true;
        } else {
            return false;
        }
    }
}
