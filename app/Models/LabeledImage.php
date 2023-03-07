<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class LabeledImage extends Model
{
    protected $table = 'labeled_images';
    protected $fillabel =[
        'images',
        'student_nim',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
