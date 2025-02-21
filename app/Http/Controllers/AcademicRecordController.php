<?php

namespace App\Http\Controllers;

use App\Models\AcademicRecord;
use App\Models\Student;
use Illuminate\Http\Request;

class AcademicRecordController extends Controller
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

        return view('academic-records.create', ['studentId' =>  session('studentId')]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validate that student_id exists in the students table
        if (!session('studentId') || !Student::find(session('studentId'))) {
            return redirect()->route('students.index')->with('message', 'Invalid student ID!');
        }

        $validator = $request->validate([
            'exam_type'   => 'required|in:SSC,HSSC',
            'year'        => 'required|integer|digits:4|min:1900|max:' . date('Y'),
            'roll_no'     => 'required|integer|unique:academic_records,roll_no',
            'marks'       => 'required|integer|min:0',
            'percentage'  => 'required|numeric|between:0,100',
            'board'       => 'required|string|max:255',
            'group'       => 'required|in:Science,Arts',
        ]);

        $validator['student_id'] = session('studentId');

        AcademicRecord::create($validator);

        return redirect(route('subjects.create'))->with(['message' => 'Record created']);
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
