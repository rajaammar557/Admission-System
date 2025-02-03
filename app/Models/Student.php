<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function academicRecords()
    {
        return $this->hasMany(AcademicRecord::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
