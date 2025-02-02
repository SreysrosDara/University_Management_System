<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'departments';

    protected $fillable = [
        'department_name',
        'head_of_department',
    ];

    public function professor(){
        return $this->hasMany(Professor::class,'department_id');
    }
    public function student(){
        return $this->hasMany(Student::class,'department_id');
    }
}
