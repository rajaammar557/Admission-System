<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\AcademicRecord;
use App\Http\Controllers\Controller;
use App\Http\Requests\AcademicRecordRequest;

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
    public function store(AcademicRecordRequest $request)
    {

        // Validate that student_id exists in the students table
        if (!session('studentId') || !Student::find(session('studentId'))) {
            return redirect()->route('students.index')->with('message', 'Invalid student ID!');
        }

        $validator = $request->validated();
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
        return view('academic-records.edit', ['academicRecord' => AcademicRecord::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AcademicRecordRequest $request, string $id)
    {
        $academicRecord = AcademicRecord::findOrFail($id);
        $academicRecord->update($request->validated());

        return redirect()->route('students.index')->with('message', 'Record updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
