<?php

namespace App\Http\Controllers\Dashboard\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('dashboard.admin.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::guard('admin')->attempt($credentials)) {
            if (Auth::guard('admin')->user()->status != 1) {
                Auth::guard('admin')->logout();
                return response()->json(['message' => 'Your account is inactive. Please contact support.','status'=>'error'], 403);
            }

            // Successful login
            return response()->json(['message' => 'Login successful' ,'status'=>'success', 'redirect' => route('dashboard')]);
        }
        return response()->json(['message' => 'Your account is inactive. Please contact support.','status'=>'error'], 201);

        // Invalid credentials
//        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    public function logout()
    {

        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }
}
