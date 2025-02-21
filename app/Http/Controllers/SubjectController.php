<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        if (!session('studentId')) {
            return redirect(route('students.create'))->with('message', 'fill student form first');
        };

        return view('subjects.create', [
            'student' => Student::with(['section', 'subjects'])->whereId(session('studentId'))->first()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $student = Student::with(['section', 'subjects'])->whereId(session('studentId'))->first();
        $student->subjects()->attach([Subject::English, Subject::Urdu, Subject::Islamyat]);

        if ($student->section->id == Section::Pre_Medical) {
            $student->subjects()->attach([Subject::Bio, Subject::Chemistry, Subject::Physics]);
        } elseif ($student->section->id == Section::Pre_Engineering) {
            $student->subjects()->attach([Subject::Math, Subject::Chemistry, Subject::Physics]);
        } elseif ($student->section->id == Section::Ics) {
            $student->subjects()->attach([Subject::Math, Subject::Computer, Subject::Physics]);
        } elseif ($student->section->id == Section::Fa) {
            $student->subjects()->attach([Subject::Health_And_Phyiscal_Education, 14, 12]);
        }
        dd('no');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
