<x-main-layout>

    <p class="text-xl mt-10 mb-5 block text-center">
        <i class="fas fa-list mr-3"></i> Select the Subjects
    </p>

    <form action="{{ route('subjects.store') }}" method="POST"
        class="p-10 bg-white rounded shadow-xl max-w-screen-md mx-auto">
        @csrf


        <!-- Compulsory Subjects -->
        <h4 class="mt-6 font-semibold">Compulsory Subjects:</h4>
        <div class="mt-2 bg-gray-100 p-3 rounded">
            <label class="inline-flex items-center">
                <input type="checkbox" name="subjects[]" value="English" checked disabled
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                <span class="ms-2 text-sm text-gray-600">English</span>
            </label>
            <label class="inline-flex items-center">
                <input type="checkbox" name="subjects[]" value="Urdu" checked disabled
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                <span class="ms-2 text-sm text-gray-600">Urdu</span>
            </label>
            <label class="inline-flex items-center">
                <input type="checkbox" name="subjects[]" value="Islamyat" checked disabled
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                <span class="ms-2 text-sm text-gray-600">Islamyat / Pak Studies</span>
            </label>
        </div>


        <!-- ICS Section Radio Buttons -->
        <div class="mt-6 bg-gray-100 p-3 rounded">
            <h4 class="font-semibold">Elective Subjects:</h4>

            <div class="mt-2 bg-gray-100 p-3 rounded">
                <label class="block">
                    <input type="checkbox" name="subjects[]" value="English" checked disabled
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                    <span class="ms-2 text-sm text-gray-600">English</span>
                </label>
                <label class="block">
                    <input type="checkbox" name="subjects[]" value="Urdu" checked disabled
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                    <span class="ms-2 text-sm text-gray-600">Urdu</span>
                </label>
            </div>

            <h4 class="font-semibold">Select one:</h4>
            <div class="flex space-x-6 mt-2">
                <label class="inline-flex items-center">
                    <input type="radio" name="ics_choice" value="Math"
                        class="border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                    <span class="ms-2 text-sm text-gray-600">Math</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" name="ics_choice" value="Computer Science"
                        class="border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                    <span class="ms-2 text-sm text-gray-600">Computer Science</span>
                </label>
            </div>
        </div>

        <!-- Submit Button -->
        <x-primary-button class="mt-6">
            {{ __('Submit') }}
        </x-primary-button>
    </form>

    <x-message :message="session('message')" />

</x-main-layout>
