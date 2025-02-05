<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        $validator = $request->validate([
            'student_name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'mobile_number' => 'required|integer',
            'whatsapp_number' => 'required|integer',
            'birthdate' => 'required|date',
            'religion' => 'required|string|max:255',
            'present_address' => 'required|string|max:255',
            'permanent_address' => 'required|string|max:255',
            'last_institution' => 'required|string|max:255',
            'scholarship' => 'required|string|max:255',
            'category_id' => 'required|integer|max:255',
            'section_id' => 'required|integer|max:255',
        ]);

        Student::create($validator);

        return redirect(route('students.index'))->with('message','Student created');
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
