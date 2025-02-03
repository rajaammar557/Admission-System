<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicRecord extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function student()
    {
        return $this->belongTo(Student::class);
    }
}
