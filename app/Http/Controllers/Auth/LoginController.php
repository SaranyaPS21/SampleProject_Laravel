<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\Models\Login;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function logindata(Request $request)
{
    $credentials = $request->only('username', 'password');

    $user = Login::where('username', $credentials['username'])->first();

    if ($user && $user->password === $credentials['password']) {
        return redirect()->intended('adminhome');
    }

    return back()->withErrors(['message' => 'Invalid login credentials']);
}


}
