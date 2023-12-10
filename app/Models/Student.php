<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends User
{
    use HasFactory;
    protected $table = 'users';

    public function mentors(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'mentor_student');
    }
}
