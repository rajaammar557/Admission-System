@php
    use App\Models\Section;
@endphp

<x-main-layout>

    <p class="text-xl mt-10 mb-5 block text-center">
        <i class="fas fa-list mr-3"></i> Select the Subjects
    </p>

    <form action="{{ route('subjects.store') }}" method="POST"
        class="px-10 pb-10 pt-5 bg-white rounded shadow-xl max-w-screen-md mx-auto">
        @csrf

        <p class="text-3xl mb-5 block text-center"> {{ $sectionName }}</p>

        <!-- Compulsory Subjects -->
        <h4 class="mt-6 font-semibold">Compulsory Subjects:</h4>
        <div class="mt-2 bg-gray-100 p-3 rounded">
            @foreach ($compulsorySubjects as $subject)
                <label class="inline-flex items-center">
                    <input type="checkbox" checked disabled
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                    <span class="ms-2 text-sm text-gray-600">{{ $subject->name }}</span>
                </label>
            @endforeach
        </div>

        <!-- Elective Subjects -->
        <h4 class="font-semibold mt-6">Elective Subjects:</h4>
        <div class="mt-2 bg-gray-100 p-3 rounded">
            @foreach ($electiveSubjects as $subject)
                <label class="inline-flex items-center">
                    <input type="checkbox" checked disabled
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                    <span class="ms-2 text-sm text-gray-600">{{ $subject->name }}</span>
                </label>
            @endforeach
        </div>

        <!-- Special Radio Button for FA and ICS -->
        @if ($student->section->id == Section::Fa || $student->section->id == Section::Ics)
            <div class="mt-6 bg-gray-100 p-3 rounded">
                <h4 class="font-semibold">Select one:</h4>
                <div class="flex space-x-6 mt-2">
                    @foreach ($specialElectives as $subject)
                        <label class="inline-flex items-center">
                            <input type="radio" name="selectiveSubject" value="{{ $subject->id }}"
                                class="border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                            <span class="ms-2 text-sm text-gray-600">{{ $subject->name }}</span>
                        </label>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Submit Button -->
        <x-primary-button class="mt-6">
            {{ __('Submit') }}
        </x-primary-button>
    </form>

    <x-message :message="session('message')" />

</x-main-layout>
