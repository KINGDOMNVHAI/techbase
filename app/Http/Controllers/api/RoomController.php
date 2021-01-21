<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function searchRoomManager($idRoom)
    {
        $userroom = DB::table('room')
            ->join('team_room', 'room.id_room', '=', 'team_room.id_room') // Search team
            ->join('user_team', 'team_room.id_team', '=', 'user_team.id_team') // Search member
            ->join('users', 'user_team.id_user', '=', 'users.id') // Search manager

            // Check enable
            ->where('room.enable_room', '=', ENABLE)
            ->where('users.enable_user', '=', ENABLE)
            ->where('user_team.enable_user_team', '=', ENABLE)

            ->where('room.id_room', '=', $idRoom)
            ->where('users.role', '=', ROLE_MANAGER_ROOM)

            ->select(
                'users.name',
                'users.role',
                'users.enable_user',

                'room.name_room',
            )
            ->limit(MAX_NUMBER_OF_USER_IN_LIST)
            ->get();

        return response()->json($userroom);
    }

    public function searchRoomLeader($idRoom)
    {
        $userroom = DB::table('room')
            ->join('team_room', 'room.id_room', '=', 'team_room.id_room') // Search team
            ->join('user_team', 'team_room.id_team', '=', 'user_team.id_team') // Search member
            ->join('users', 'user_team.id_user', '=', 'users.id') // Search manager

            // Check enable
            ->where('room.enable_room', '=', ENABLE)
            ->where('users.enable_user', '=', ENABLE)
            ->where('user_team.enable_user_team', '=', ENABLE)

            ->where('room.id_room', '=', $idRoom)
            ->where('users.role', '=', ROLE_TEAM_LEADER)

            ->select(
                'users.name',
                'users.role',
                'users.enable_user',

                'room.name_room',
            )
            ->limit(MAX_NUMBER_OF_USER_IN_LIST)
            ->get();

        return response()->json($userroom);
    }

    public function searchRoomMember($idRoom)
    {
        $userroom = DB::table('room')
            ->join('team_room', 'room.id_room', '=', 'team_room.id_room') // Search team
            ->join('user_team', 'team_room.id_team', '=', 'user_team.id_team') // Search member
            ->join('users', 'user_team.id_user', '=', 'users.id') // Search manager

            // Check enable
            ->where('room.enable_room', '=', ENABLE)
            ->where('users.enable_user', '=', ENABLE)
            ->where('user_team.enable_user_team', '=', ENABLE)

            ->where('room.id_room', '=', $idRoom)
            ->where('users.role', '=', ROLE_MEMBER)

            ->select(
                'users.name',
                'users.role',
                'users.enable_user',

                'room.name_room',
            )
            ->limit(MAX_NUMBER_OF_USER_IN_LIST)
            ->get();

        return response()->json($userroom);
    }
}
