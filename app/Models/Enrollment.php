<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $table = 'enrollments';

    protected $fillable =[
        'student_id',
        'course_id',
        'semester',
        'enrollment_date',
    ];

    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }

    public function student(){
        return $this->belongsTo(Student::class,'student_id');
    } 
}
