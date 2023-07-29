<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Enums\ResponseStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminChangePasswordRequest;
use App\Http\Requests\Admin\AdminForgotPasswordRequest;
use App\Http\Requests\Admin\AdminLoginRequest;
use App\Models\PasswordReset;
use App\Providers\RouteServiceProvider;
use App\Services\Admin\AdminAuthService;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\RedirectResponse;
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
    public function __construct(AdminAuthService $adminAuthService)
    {
        $this->middleware('guest')->except('logout');
        $this->adminAuthService = $adminAuthService;
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

    public function showLinkRequestForm(): View
    {
        return view('auth.passwords.email');
    }

    public function sendResetPassword(AdminForgotPasswordRequest $request):RedirectResponse
    {
        $response = $this->adminAuthService->sendEmailResetLink($request->validated());
        return redirect()->route('admin.password.forgot')->with([
            'status' => $response['status'],
            'message' => $response['message']
        ]);
    }

    public function showChangePasswordForm(): \Illuminate\Contracts\View\View|RedirectResponse
    {
        if (PasswordReset::checkTokenForgotPassword(request()->query('token'))) {
            return view('auth.passwords.reset');
        }
        return redirect()->route('admin.password.forgot')->with([
            'status' => ResponseStatus::ERROR->value,
            'message' => 'Lỗi rồi'
        ]);
    }

    public function changePassword(AdminChangePasswordRequest $request): RedirectResponse
    {
        $response = $this->adminAuthService->changePassword($request->validated());
        $routeName = $response['status'] === ResponseStatus::SUCCESS->value ? 'admin.login.form' : 'admin.password.reset';
        return redirect()->route($routeName)->with([
            'status' => $response['status'],
            'message' => $response['message']
        ]);
    }
}
