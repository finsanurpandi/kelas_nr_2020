<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nidn',
        'nama'
    ];

    protected $primaryKey = 'nidn';

    public function student()
    {
        return $this->hasMany(Student::class, 'nidn', 'nidn');
    }

}
