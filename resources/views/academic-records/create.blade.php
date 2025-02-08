<x-main-layout>


    <form action="{{ route('academic-records.store') }}" method="post">
        @csrf

        <div class="mt-4">
            <x-input-label for="exam_type" :value="__('Exam Type')" />

            <select
                class="block mt-1 w-full border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm"
                name="exam_type" :value="old('exam_type')" required>
                <option value="SSC">SSC</option>
                <option value="HSSC">HSSC</option>
            </select>
            <x-input-error :messages="$errors->get('exam_type')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="year" :value="__('Year')" />
            <x-text-input id="year" type="number" name="year" :value="old('year')" required autofocus
                autocomplete="year" />
            <x-input-error :messages="$errors->get('year')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="roll_no" :value="__('Roll no.')" />
            <x-text-input id="roll_no" type="number" name="roll_no" :value="old('roll_no')" required autofocus
                autocomplete="roll_no" />
            <x-input-error :messages="$errors->get('roll_no')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="marks" :value="__('Marks')" />
            <x-text-input id="marks" type="number" name="marks" :value="old('marks')" required autofocus
                autocomplete="marks" />
            <x-input-error :messages="$errors->get('marks')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="percentage" :value="__('Percentage')" />
            <x-text-input id="percentage" type="number" name="percentage" :value="old('percentage')" required autofocus
                autocomplete="percentage" />
            <x-input-error :messages="$errors->get('percentage')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="board" :value="__('Board')" />
            <x-text-input id="board" type="text" name="board" :value="old('board')" required autofocus
                autocomplete="board" />
            <x-input-error :messages="$errors->get('board')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="group" :value="__('Group')" />

            <select
                class="block mt-1 w-full border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm"
                name="group" :value="old('group')" required>
                <option value="Science">Science</option>
                <option value="Arts">Arts</option>
            </select>
            <x-input-error :messages="$errors->get('group')" class="mt-2" />
        </div>

        <x-primary-button class="mt-4">
            {{ __('Create Record') }}
        </x-primary-button>
    </form>
</x-main-layout>
