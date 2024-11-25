<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\DepartmentEnum;
use App\StatusEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;

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

}
