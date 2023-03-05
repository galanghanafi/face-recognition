<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Student;

class Attendance extends Model
{
    use SoftDeletes;

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
