<?php
namespace App\Services\auth;

use App\Model\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginService extends ServiceProvider
{
    public function __construct()
    {

    }

    // get user infomation
    public function getUserInfo($username)
    {
        $query = User::where('username', $username)
            ->where('enable_user', '=', ENABLE)
            ->select(
                'name',
                'username',
                'apikey',
                'enable_user'
            )
            ->first();

        return $query;
    }
}
