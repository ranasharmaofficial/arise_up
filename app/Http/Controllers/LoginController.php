<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserLogin;
use App\Repositories\Interfaces\LoginRepositoryInterface;

class LoginController extends Controller
{

    public function login()
    {
        return view('admin.auth.login');
    }
    public function adminAuthLogin(Request $request)
    {
      $data = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);


        $adminInfo =   UserLogin::join('users', 'users.id', '=', 'user_logins.user_id')
                    ->join('user_types', 'user_types.id', '=', 'users.user_type_id')
                    ->where('user_logins.username',  $request->username)
                    ->where('user_logins.password', $request->password)
                    ->where('user_logins.status', 1)
                    ->select(['users.*', 'user_types.name as userType', 'user_logins.*'])
                    ->first();

        if (!$adminInfo) {
            return redirect()->route('admin.auth.login')->with(session()->flash('alert-danger', 'Failed! We do not recognize your username or password.'));
        } else  {
            $request->session()->put('LoggedUser', $adminInfo);
            return redirect('admin/dashboard')->with(session()->flash('alert-success', 'Successfully Loggedin'));
        }
    }



}
