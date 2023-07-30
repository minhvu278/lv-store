<?php

namespace App\Models;

use App\Enums\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'role_id',
        'status',
        'address',
        'phone',
        'email',
        'password',
        'registration_date',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    const STATUS = [
        'REQUEST' => 0,
        'ACTIVE' => 1,
        'REJECTED' => 2,
        'BLOCKED' => 3
    ];

    public function isAdmin(): bool
    {
        return $this->role_id === Role::ADMIN->value;
    }

    public function isUser(): bool
    {
        return $this->role_id === Role::USER->value;
    }

    public function scopeGetUsersWithTrashed($query)
    {
        return $query->withTrashed();
    }
}
