<?php

namespace App\Services\Admin;

use App\Enums\ResponseStatus;
use App\Models\User;
use App\Services\BaseService;
use App\Models\PasswordReset;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

class AdminAuthService extends BaseService
{
    public function sendEmailResetLink(array $request): array
    {
        try {
            $user = User::where('email', $request['email'])->first();
            if ($user) {
                $token = bcrypt($request['email']);
                PasswordReset::updateOrCreate(
                    ['email' => $request['email']],
                    [
                        'email' => $request['email'],
                        'token' => $token,
                        'created_at' => Carbon::now(),
                    ]
                );

                $this->sendMail(
                    $request['email'],
                    'Di sét',
                    'vendor.mail.auth.reset_password',
                    [
                        'name' => $user->username,
                        'email' => $user->email,
                        'url' => route('admin.password.reset', ['token' => $token])
                    ]
                );
            }
            return [
                'status' => ResponseStatus::SUCCESS->value,
                'message' => 'Success'
            ];

        } catch (\Exception $e)
        {
            Log::error('Send email reset password error: ' . $e);
            return [
                'status' => ResponseStatus::ERROR->value,
                'message' => 'Lỗi rồi bro'
            ];
        }
    }

    public function changePassword(array $request): array
    {
        try {
            DB::beginTransaction();
            $userPasswordReset = PasswordReset::where('token', $request['token'])->first();
            $user = User::where('email', $userPasswordReset->email)->first();
            if (!$user) {
                throw new Exception();
            }
            $user->update([
                'password' => $request['new_password']
            ]);
            $userPasswordReset->delete();

            DB::commit();
            return [
                'status' => ResponseStatus::SUCCESS->value,
                'message' => 'Success'
            ];
        } catch (\Exception $e) {
            DB::rollBack();
            Log::warning('Change password error: ' . $e);
            return [
                'status' => ResponseStatus::ERROR->value,
                'message' => 'Lỗi rồi bro'
            ];
        }
    }

    public function checkTokenForgotPassword(string $token): bool
    {
        $user = PasswordReset::where('token', $token)->first();
        return $user && $user->isTokenNotExpires();
    }
}
