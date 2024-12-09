<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\relations\HasMany;
use Illuminate\Database\Eloquent\relations\HasManyThrough;

class Department extends Model
{
    use HasFactory;

    public function lecturer(): HasMany
    {
        return $this->hasMany(Lecturer::class);
    }

    public function students(): HasManyThrough
    {
        return $this->hasManyThrough(
            Student::class,
            Lecturer::class,
            'department_id', // FK lecturers table
            'nidn', // FK students table   
            'id', // PK departments table
            'nidn', // KEY lectuerrs table
        );
    }
}
