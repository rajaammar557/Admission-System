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
            return redirect(route('students.create'))->with('message', 'Fill student form first');
        }

        $student = Student::with('section')->whereId(session('studentId'))->first();
        $sectionName = $student->section->name;
        // Get compulsory subjects
        $compulsorySubjects = Subject::where('compulsory', 1)->get();

        // Get elective subjects that are not compulsory
        $electiveSubjects = $student->section->subjects()->where('compulsory', 0)->get();
        // Special electives for FA and ICS
        $specialElectives = [];
        if ($student->section->id == Section::Fa) {
            $specialElectives = Subject::whereIn('id', [Subject::Economics, Subject::Islamyat_Elective])->get(); // Economics, Islamyat Elective
        } elseif ($student->section->id == Section::Ics) {
            $specialElectives = Subject::whereIn('id', [Subject::Physics, Subject::Economics, Subject::Stats])->get(); // Math, Computer
        }

        return view('subjects.create', compact('compulsorySubjects', 'electiveSubjects', 'specialElectives', 'student', 'sectionName'));
    }





    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Get the student with section details
        $student = Student::with(['section', 'subjects'])->whereId(session('studentId'))->first();

        // Validation rules (only for special elective)
        $rules = [];

        if ($student->section->id == Section::Fa || $student->section->id == Section::Ics) {
            $rules['selectiveSubject'] = 'required|exists:subjects,id';
        }

        $request->validate($rules);

        // Attach compulsory subjects
        $compulsorySubjects = [Subject::English, Subject::Urdu, Subject::Islamyat, Subject::Pak_Study];
        $student->subjects()->sync($compulsorySubjects);


        if ($student->section->id == Section::Pre_Medical) {
            $student->subjects()->attach([Subject::Bio, Subject::Chemistry, Subject::Physics]);
        } elseif ($student->section->id == Section::Pre_Engineering) {
            $student->subjects()->attach([Subject::Math, Subject::Chemistry, Subject::Physics]);
        } elseif ($student->section->id == Section::Ics) {
            $student->subjects()->attach([Subject::Math, Subject::Computer, $request->input('selectiveSubject')]);
        } elseif ($student->section->id == Section::Fa) {
            $student->subjects()->attach([Subject::Health_And_Phyiscal_Education, $request->input('selectiveSubject')]);
        }

        return redirect(route('students.index'))->with(['message' => 'Subjects selected successfully!']);
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
