<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function alluser()
    {
        $user = User::where('enable_user', '=' , ENABLE)->limit(MAX_NUMBER_OF_USER_IN_LIST)->get();

        return response()->json($user);
    }

    public function detail($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->update($request->all());

        return response()->json('successfully updated');
    }

    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        return response()->json('successfully deleted');
    }

    public function pagination($page)
    {
        if ($page != null)
        {
            $idUserStart = ITEM_PER_PAGE * $page - 19;
            $user = User::where('id', '>=' , $idUserStart)->limit(ITEM_PER_PAGE)->get();
        }
        else
        {
            $user = User::where('id', '<=' , ITEM_PER_PAGE)->limit(ITEM_PER_PAGE)->get();
        }
        return response()->json($user);
    }
}
