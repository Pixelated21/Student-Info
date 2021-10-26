<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_name',
        'dob',
    ];

    public function phoneNumber(){
        return $this->hasMany(phoneNumber::class,'student_id','id');
    }
}
