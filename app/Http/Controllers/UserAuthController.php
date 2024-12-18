<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\LoginRequest;
use App\Http\Requests\Dashboard\StoreUserRequest;
use Domain\Shared\DTOs\UserData;
use Domain\Shared\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    public function __construct(private UserService $service) {}

    public function showLoginForm()
    {
        return view('front.demo.user.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('demo.index'));
        }
        return back()->withErrors([
            'email' => 'البيانات المدخلة غير صحيحة.',
        ])->onlyInput('email');
    }

    public function showRegisterForm()
    {
        return view('front.demo.user.create');
    }

    public function store(StoreUserRequest $request)
    {

        // dd($request);

        $data = UserData::from($request->validated());
        $this->service->createUser($data, $request);
        $request->session()->regenerate();
        return redirect()->intended(route('demo.index'))->with('success', 'User created successfully.');

    }

    // public function edit(Admin $admin)
    // {
    //     return view('dashboard.admin.edit', compact('admin'));
    // }

    // public function update(UpdateAdminRequest $request, Admin $admin)
    // {
    //     $data = UpdateAdminData::from($request->validated());
    //     $this->service->updateAdmin($admin->id, $data, $request);

    //     return redirect()->route('admin.index')
    //         ->with('success', 'Admin updated successfully.');
    // }

    // public function destroy(int $id)
    // {
    //     $this->service->deleteAdmin($id);

    //     return response()->json([
    //         'status' => 'success',
    //         'message' => 'Admin deleted successfully.',
    //     ], 200);
    // }

    // public function changeStatus(Request $request)
    // {
    //     $this->service->changeStatus(
    //         $request->id,
    //         $request->status === "true"
    //     );

    //     return response()->json([
    //         'message' => 'Status changed successfully.',
    //     ], 200);
    // }


    public function logout()
    {
        Auth::guard()->logout();
        return redirect()->route('login');
    }
}
