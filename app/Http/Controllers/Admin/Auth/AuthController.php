<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Enums\ResponseStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::ADMIN;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(): View
    {
        return view('auth.login');
    }

    public function login(AdminLoginRequest $request): RedirectResponse
    {
        $credentials = $request->validated();
        if (Auth::attempt($credentials) && Auth::user()->isAdmin()) {
            return redirect(RouteServiceProvider::ADMIN)->with([
                'status' => ResponseStatus::SUCCESS->value,
                'message' => 'Login successfully',
            ]);
        }
        Auth::logout();
        return redirect()->route('admin.login.form')->with([
            'status' => ResponseStatus::ERROR->value,
            'message' => __('auth.message.login.error')
        ]);
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route('admin.login.form')->with([
            'status' => ResponseStatus::SUCCESS->value,
            'message' => __('auth.message.logout.success')
        ]);
    }
}
