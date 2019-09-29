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
            return redirect('/');
        } else {
            return redirect('/login');
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
            return response()->json(['success' => 'You have successfully logged in']);
        } else {
            return response()->json(['error' => 'Invalid email or password']);
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
            'gender' => 'required',
            'dob' => 'required',
        ]);

        $data = $request->only(['firstname', 'lastname', 'email', 'password', 'gender', 'dob']);
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        $user->createToken('freiptube')->accessToken;

        return redirect('/')->with('success', 'Registration successful! Please update your profile and start uploading');
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
        return Redirect('/login');
    }
}
