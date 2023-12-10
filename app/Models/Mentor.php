<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Mentor extends User
{
    use HasFactory;

    protected $table = 'users';
    public const ROLE_ID = 1;

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class, 'mentor_student')->withTimestamps();
    }
}
