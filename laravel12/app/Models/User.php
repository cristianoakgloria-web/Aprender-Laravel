<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    // um usuario pode ter muitos hábitos
    public function habits(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Habit::class, 'user_id');
    }

    // um usuário pode ter muitos registros de hábitos
    public function habitLogs(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(HabitLog::class, 'user_id');
    }
}
