<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserCollection;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function listuser()
    {
        if (Auth::check())
        {
            $username = Auth::user()->username;

            // Public Services
            $viewListUser = User::all();

            return view('backend.pages.list-user', [
                'title'     => TITLE_FRONTEND_INDEX,

                'username'  => $username,
                'listuser'  => $viewListUser,
            ]);
        }
        else {
            return redirect('login');
        }
    }
}
