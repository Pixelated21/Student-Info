<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phoneNumber extends Model
{
    use HasFactory;

    protected $fillable = [
      'phone_number',
        'student_id',
    ];

    public function student(){
        return $this->belongsTo(Student::class,'student_id','id');
    }
}
