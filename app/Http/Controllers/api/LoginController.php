<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\all\UserService;
use App\Services\auth\LoginService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function checklogin(Request $request)
    {
        $request->validate([
            'username' => 'required|string|min:3|max:255',
            'password' => 'required|string|min:3|max:20',
        ]);

        $username = $request->username;
        $password = $request->password;

        if (Auth::attempt(['username' => $username, 'password' => $password]))
        {
            $login = new LoginService;
            $userinfo = $login->getUserInfo($username);

            return response()->json([
                'message' => 'User has been login',
                'your info' => $userinfo
            ], 200);
        }
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required|string',
            'username' => 'required|string|unique:users|min:3|max:255',
            'password' => 'required|string|min:3|max:20',
            'email'    => 'required|email|unique:users|max:20',
            'role'     => 'required|integer',
        ]);

        $user = new UserService;
        $createUser = $user->createUser();

        return response()->json(['message' => 'User has been registered'], 200);
    }

    public function getapikey(Request $request)
    {
        $request->validate([
            'username' => 'required|string|min:3|max:255',
            'password' => 'required|string|min:3|max:20',
        ]);

        $username = $request->username;
        $password = $request->password;

        if (Auth::attempt(['username' => $username, 'password' => $password]))
        {
            $login = new LoginService;
            $userinfo = $login->getUserInfo($username);

            if ($userinfo->apikey == null)
            {
                $user = new UserService;
                $updateAPIKey = $user->updateAPIkeyUser($username);
                $userinfo = $login->getUserInfo($username);

                return response()->json([
                    'message' => 'User has been created API key',
                    'apikey' => $userinfo->apikey
                ], 200);
            }
            else
            {
                return response()->json([
                    'message' => 'User already have API key',
                    'apikey' => $userinfo->apikey
                ], 200);
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return response()->json(['message' => 'You are logged out'], 200);
    }
}
