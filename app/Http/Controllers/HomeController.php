<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\AcademicRecord;
use App\Models\Attactment;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        // $students = Student::with(['subjects', 'academicRecords', 'category','section'])->toSql();
        $category = Category::create(['name' => 'Armed'])->toSql();
        $section = Section::create(['name' => 'Pre Engineer'])->toSql();
        $subject = Subject::create(['name' => 'English'])->toSql();

        $studentCreation = Student::create(
            [
                'student_name' => 'Ammar',
                'father_name' => 'Shakeel',
                'profession' => 'Engineer',
                'mobile_number' => '03001234567',
                'whatsapp_number' => '03001234567',
                'birthdate' => now(),
                'religion' => 'Islam',
                'present_address' => 'Mohri Sharif',
                'permanent_address' => 'Mohri Sharif',
                'last_institution' => 'SJP School',
                'scholarship' => 'Won',
                'section_id' => '1',
                'category_id' => '1',
            ]
        )->toSql();

        $academic_recordCreation = AcademicRecord::create(
            [
                'student_id' => '1',
                'exam_type' => 'ssc',
                'year' => '2024',
                'roll_no' => '248523',
                'marks' => '1090',
                'percentage' => '99',
                'board' => 'Gujrawala',
                'group' => 'Science',
            ]
        )->toSql();

        $attachments = Attactment::create(
            [
                'name' => 'cnic id.',
                'description' => 'the photo copy of cnic no',
                'requirements' => '4 copies',
            ]
        )->toSql();

        // return $students;
    }
}
