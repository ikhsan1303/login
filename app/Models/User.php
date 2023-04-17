<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'login_attempts', 'last_login_attempt_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function canLogin()
    {
        $maxLoginAttempts = 3;
        $lockoutTime = 30; // in seconds

        if ($this->login_attempts >= $maxLoginAttempts && $this->last_login_attempt_at) {
            $lastLoginAttempt = $this->last_login_attempt_at->addSeconds($lockoutTime);
            return $lastLoginAttempt->isPast();
        }

        return true;
    }

    public function resetLoginAttempts()
    {
        $this->update([
            'login_attempts' => 0,
            'last_login_attempt_at' => null,
        ]);
    }
}
