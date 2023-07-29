<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'password_resets';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email', 'token', 'created_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['created_at'];

    public $timestamps = false;

    /**
     * isTokenExpires
     *
     * @param  int $hour
     * @return bool
     */
    public function isTokenNotExpires(): bool
    {
        $hour = config('const.password_reset_token_expiries');
        return Carbon::parse($this->created_at)->addHours($hour)->gt(Carbon::now());
    }

    /**
     * checkTokenForgotPassword
     *
     * @param  string $token
     * @return bool
     */
    public function scopeCheckTokenForgotPassword(Builder $query, string $token): bool
    {
        $user = $this->getPasswordResetByToken($token)->first();
        return $user && $user->isTokenNotExpires();
    }

    /**
     * getPasswordResetByToken
     *
     * @param  string $token
     * @return mixed
     */
    public function scopeGetPasswordResetByToken(Builder $query, string $token)
    {
        return $query->where('token', $token);
    }
}
