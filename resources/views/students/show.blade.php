<x-main-layout>
    <div>
        <p>Student name: {{ $student->student_name }}</p>
        <p>Father name: {{ $student->father_name }}</p>
        <p>Profession: {{ $student->profession }}</p>
        <p>Mobile Number: {{ $student->mobile_number }}</p>
        <p>Whatsapp Number: {{ $student->whatsapp_number }}</p>
        <p>Address: {{ $student->present_address }}</p>
        <p>Section: {{ $student->section->name }}</p>

        <h1 class="mt-5 text-2xl">Acedmic Record</h1>

        @foreach ($student->academicRecords as $record)
            <p>Exam Type: {{ $record->exam_type }}</p>
            <p>Year: {{ $record->year }}</p>
            <p>Roll no: {{ $record->roll_no }}</p>
            <p>Marks: {{ $record->marks }}</p>
            <p>Percentage: {{ $record->percentage }}</p>
            <p>Board: {{ $record->board }}</p>
            <p>Group: {{ $record->group }}</p>
        @endforeach

        <h1 class="mt-5 text-2xl">Subjects</h1>

        @foreach ($student->subjects as $subject)
            <p>{{ $subject->name }}</p>
        @endforeach
    </div>
    <div class="flex justify-between mt-6">

        <a href="{{ route('students.index') }}" class="text-blue-500 mt-5 text-right block">Go Back</a>
        <div>
            <td class="text-left py-3 px-4 space-x-5">
                <a href="{{ route('students.edit', $student->id) }}" class="text-green-500">Edit</a>

                <form action="{{ route('students.destroy', $student->id) }}" class="inline" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500" type="submit"
                        onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </div>
    </div>

</x-main-layout>
