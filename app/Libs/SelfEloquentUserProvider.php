<?php

namespace App\Libs;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Str;

class SelfEloquentUserProvider extends EloquentUserProvider
{

    /**
     * Validate a user against the given credentials.
     *
     * @param \Illuminate\Contracts\Auth\Authenticatable $user
     * @param array $credentials
     */
    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        $userInput = $credentials;
        //這裡你可以根據你的業務需求，自定義加密方式。
        //我這個位置是使用phpcms的加密方式。        
        $aftPwd = md5(md5($userInput['password']) . $user['salt']);
        return  $aftPwd   == $user['password'];
    }
}
