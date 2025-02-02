<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable =[
        'first_name',
        'last_name',
        'email',
        'date_of_birth',
        'gender',
        'department_id',
    ];

    public function enrollments(){
        return $this->hasMany(Enrollment::class,'student_id');
    }

    public function department(){
        return $this->belongsTo(Department::class, 'department_id');
    }
}
