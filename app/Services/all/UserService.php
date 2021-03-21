<?php
namespace App\Services\all;

use App\Models\User;
use DB;
use Illuminate\Support\ServiceProvider;

class UserService extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function createUser(Request $request)
    {
        $apikey = $this->createAPIkey();

        $user = new User([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'role' => $request->role,
            'apikey' => $apikey,
        ]);

        $user->save();
    }

    public function updateAPIkeyUser($username)
    {
        $apikey = $this->createAPIkey();

        $query = User::where('username', $username)
            ->update([
                'apikey' => $apikey,
            ]);
    }

    // create random string for API key
    public function createAPIkey()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 0; $i < 30; $i++) {
            $randstring = $randstring . $characters[rand(0, strlen($characters))];
        }
        return $randstring;
    }
}
