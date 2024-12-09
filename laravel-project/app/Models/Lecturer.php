<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\DepartmentEnum;
use App\StatusEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\relations\HasMany;
use Illuminate\Database\Eloquent\relations\HasOne;
use Illuminate\Database\Eloquent\relations\BelongsTo;

class Lecturer extends Model
{
    use HasFactory;

    protected $fillable = [
        'nidn',
        'firstname',
        'lastname',
        'department_id',
    ];

    protected $casts = [
        'is_active' => StatusEnum::class,
        'department_id' => DepartmentEnum::class,
    ];

    protected $attributes = [
        'is_active' => true
    ];

    public function fullName(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->firstname.' '.$this->lastname
        );
    }

    public function students(): HasMany
    {
        return $this->hasMany(Student::class, 'nidn', 'nidn');
    }

    public function student(): HasOne
    {
        return $this->hasOne(Student::class, 'nidn', 'nidn');
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

}
