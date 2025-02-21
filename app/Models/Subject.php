<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    const English = 1;
    const Urdu = 2;
    const Islamyat = 3;
    const Pak_Study = 16;
    const Math = 4;
    const Bio = 5;
    const Chemistry = 7;
    const Physics = 6;
    const Health_And_Phyiscal_Education = 13;
    const Computer = 8;

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
