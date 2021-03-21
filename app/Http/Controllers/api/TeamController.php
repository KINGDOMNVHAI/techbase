<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\UserTeam;
use DB;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function searchTeamLeader($idTeam)
    {
        $userteam = DB::table('user_team')
            ->join('users', 'user_team.id_user', '=', 'users.id')
            ->where('user_team.enable_user_team', '=', ENABLE)
            ->where('users.enable_user', '=', ENABLE)
            ->where('user_team.id_team', '=', $idTeam)
            ->where('users.role', '=', ROLE_TEAM_LEADER)
            ->select(
                'user_team.id_user',
                'user_team.id_team',
                'user_team.enable_user_team',
                'user_team.join_date',

                'users.name',
                'users.role',
                'users.enable_user',
            )
            ->limit(MAX_NUMBER_OF_USER_IN_LIST)
            ->get();

        return response()->json($userteam);
    }

    public function searchTeamMember($idTeam)
    {
        $userteam = DB::table('user_team')
            ->join('users', 'user_team.id_user', '=', 'users.id')
            ->where('user_team.enable_user_team', '=', ENABLE)
            ->where('user_team.id_team', '=', $idTeam)
            ->where('users.role', '=', ROLE_MEMBER)
            ->select(
                'user_team.id_user',
                'user_team.id_team',
                'user_team.enable_user_team',
                'user_team.join_date',

                'users.name',
                'users.role',
                'users.enable_user',
            )
            ->limit(MAX_NUMBER_OF_USER_IN_LIST)
            ->get();

        return response()->json($userteam);
    }
}
