<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Student;

class Attendance extends Model
{
    use SoftDeletes;
    protected $fillable =[
        'student_nim'
    ];
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
