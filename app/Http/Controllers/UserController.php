<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        if (Auth::User()) {
            return redirect('/admin/dashboard');
        } else {
            return redirect('/admin/gb-admin-login');
        }
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $user->createToken('freiptube')->accessToken;
            return response()->json([200, 'success', 'You have successfully logged in']);
        } else {
            return response()->json([401, 'error', 'Invalid email or password']);
        }
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|max:50',
            'lastname' => 'required|max:50',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'cpassword' => 'required|same:password',
        ]);

        $data = $request->only(['firstname', 'lastname', 'email', 'password']);
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        $user->createToken('freiptube')->accessToken;

        return response()->json([200, 'success', 'Registration successful']);
    }

    public function logout(Request $request)
    {
        $value = $request->bearerToken();
        if ($value) {
            $id = (new Parser())->parse($value)->getHeader('jti');
            User::table('oauth_access_tokens')->where('id', '=', $id)->update(['revoked' => 1]);
            $this->guard()->logout();
        }
        Auth::logout();
        return Redirect('/');
    }
}
