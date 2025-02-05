<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::with(['academicRecords', 'category', 'section', 'subjects'])->latest()->paginate(20);

        return view('students.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        Student::create($request->validated());

        return redirect(route('students.index'))->with('message', 'Student created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('students.show', ['student' => Student::whereId($id)->with('category')->first()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('students.edit', ['student' => Student::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, string $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->validated());

        return redirect()->route('students.index')->with('message', 'Student updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id); // Find student or throw error
        $student->delete(); // Delete student

        return redirect()->route('students.index')->with('message', 'Student deleted successfully!');
    }
}
