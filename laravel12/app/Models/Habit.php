<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Habit extends Model
{
    protected $fillable = [
        'name',
        'user_id',
    ];

    // um hábito pertence a um usuário
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // um hábito pode ter muitos registros de hábitos
    public function habitLogs(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(HabitLog::class, 'habit_id');
    }
}
