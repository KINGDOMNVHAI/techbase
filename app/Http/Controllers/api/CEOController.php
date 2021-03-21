<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use DB;
use Illuminate\Http\Request;

class CEOController extends Controller
{
    public function searchCEO()
    {
        $ceo = DB::table('users')
            ->where('enable_user', '=', ENABLE)
            ->where('role', '=', ROLE_CEO)
            ->select(
                'users.name',
                'users.role',
                'users.enable_user',
            )
            ->first();

        return response()->json($ceo);
    }
}
