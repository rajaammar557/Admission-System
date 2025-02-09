<x-main-layout>

    <p class="text-xl mt-10 mb-5 block text-center">
        <i class="fas fa-list mr-3"></i> Fill the Acedmic Record Form
    </p>

    <form action="{{ route('academic-records.store') }}" method="post"
        class="p-10 bg-white rounded shadow-xl max-w-screen-md mx-auto">
        @csrf

        <div class="mt-4">
            <x-input-label for="exam_type" :value="__('Exam Type')" />

            <select class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded border-0" name="exam_type"
                :value="old('exam_type')" required>
                <option value="SSC">SSC</option>
                <option value="HSSC">HSSC</option>
            </select>
            <x-input-error :messages="$errors->get('exam_type')" class="mt-2" />
        </div>

        <div class="inline-block mt-4 w-1/2 pr-1">
            <x-input-label for="year" :value="__('Year')" />
            <x-text-input id="year" type="number" name="year" :value="old('year')" required autofocus
                autocomplete="year" />
            <x-input-error :messages="$errors->get('year')" class="mt-2" />
        </div>

        <div class="inline-block mt-4 -mx-1 pl-1 w-1/2">
            <x-input-label for="roll_no" :value="__('Roll no.')" />
            <x-text-input id="roll_no" type="number" name="roll_no" :value="old('roll_no')" required autofocus
                autocomplete="roll_no" />
            <x-input-error :messages="$errors->get('roll_no')" class="mt-2" />
        </div>

        <div class="inline-block mt-4 w-1/2 pr-1">
            <x-input-label for="marks" :value="__('Marks')" />
            <x-text-input id="marks" type="number" name="marks" :value="old('marks')" required autofocus
                autocomplete="marks" />
            <x-input-error :messages="$errors->get('marks')" class="mt-2" />
        </div>

        <div class="inline-block mt-4 -mx-1 pl-1 w-1/2">
            <x-input-label for="percentage" :value="__('Percentage')" />
            <x-text-input id="percentage" type="number" name="percentage" :value="old('percentage')" required autofocus
                autocomplete="percentage" />
            <x-input-error :messages="$errors->get('percentage')" class="mt-2" />
        </div>

        <div class="inline-block mt-4 w-1/2 pr-1">
            <x-input-label for="board" :value="__('Board')" />
            <x-text-input id="board" type="text" name="board" :value="old('board')" required autofocus
                autocomplete="board" />
            <x-input-error :messages="$errors->get('board')" class="mt-2" />
        </div>

        <div class="inline-block mt-4 -mx-1 pl-1 w-1/2">
            <x-input-label for="group" :value="__('Group')" />

            <select class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded border-0" name="group"
                :value="old('group')" required>
                <option value="Science">Science</option>
                <option value="Arts">Arts</option>
            </select>
            <x-input-error :messages="$errors->get('group')" class="mt-2" />
        </div>

        <x-primary-button class="mt-6">
            {{ __('Create Record') }}
        </x-primary-button>
    </form>
</x-main-layout>
