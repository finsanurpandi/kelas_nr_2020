<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public function student()
    {
        return $this->hasManyThrough(
            Student::class, // target class
            Lecture::class, // melalui class lecture
            'department_id', // FK dari lectures table
            'nidn', // FK dari students table
            'id', // PK dari departmnets table
            'nidn', // PK dari table lectures
        );
    }
}
