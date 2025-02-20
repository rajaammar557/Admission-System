<x-main-layout>

    <p class="text-xl mt-10 mb-5 block text-center">
        <i class="fas fa-list mr-3"></i> Update the  Addmission
    </p>

    <form action="{{ route('students.update', $student->id) }}" method="post"
        class="p-10 bg-white rounded shadow-xl max-w-screen-lg mx-auto">
        @csrf
        @method('PUT')
        <div>
            <x-input-label for="student_name" :value="__('Student Name')" />
            <x-text-input id="student_name" type="text" name="student_name" :value="old('student_name', $student->student_name)" required autofocus
                autocomplete="student_name" />
            <x-input-error :messages="$errors->get('student_name')" class="mt-2" />
        </div>

        <div class="inline-block mt-4 w-1/2 pr-1">
            <x-input-label for="father_name" :value="__('Father Name')" />
            <x-text-input id="father_name" type="text" name="father_name" :value="old('father_name', $student->father_name)" required autofocus
                autocomplete="father_name" />
            <x-input-error :messages="$errors->get('father_name')" class="mt-2" />
        </div>

        <div class="inline-block mt-4 -mx-1 pl-1 w-1/2">
            <x-input-label for="profession" :value="__('Profession')" />
            <x-text-input id="profession" type="text" name="profession" :value="old('profession', $student->profession)" required autofocus
                autocomplete="student_name" />
            <x-input-error :messages="$errors->get('profession')" class="mt-2" />
        </div>

        <div class="inline-block mt-4 w-1/2 pr-1">
            <x-input-label for="mobile_number" :value="__('Mobile Number')" />
            <x-text-input id="mobile_number" type="number" name="mobile_number" :value="old('mobile_number', $student->mobile_number)" required autofocus
                autocomplete="mobile_number" />
            <x-input-error :messages="$errors->get('mobile_number')" class="mt-2" />
        </div>

        <div class="inline-block mt-4 -mx-1 pl-1 w-1/2">
            <x-input-label for="whatsapp_number" :value="__('Whatsapp Number')" />
            <x-text-input id="whatsapp_number" type="number" name="whatsapp_number" :value="old('whatsapp_number', $student->whatsapp_number)" required
                autofocus autocomplete="whatsapp_number" />
            <x-input-error :messages="$errors->get('whatsapp_number')" class="mt-2" />
        </div>

        <div class="inline-block mt-4 w-1/2 pr-1">
            <x-input-label for="birthdate" :value="__('Birthdate')" />
            <x-text-input id="birthdate" type="date" name="birthdate" :value="old('birthdate', $student->birthdate)" required autofocus
                autocomplete="birthdate" />
            <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
        </div>

        <div class="inline-block mt-4 -mx-1 pl-1 w-1/2">
            <x-input-label for="religion" :value="__('Religion')" />
            <x-text-input id="religion" type="text" name="religion" :value="old('religion', $student->religion)" required autofocus
                autocomplete="religion" />
            <x-input-error :messages="$errors->get('religion')" class="mt-2" />
        </div>

        <div class="inline-block mt-4 w-1/2 pr-1">
            <x-input-label for="present_address" :value="__('Present Address')" />
            <x-text-input id="present_address" type="text" name="present_address" :value="old('present_address', $student->present_address)" required
                autofocus autocomplete="present_address" />
            <x-input-error :messages="$errors->get('present_address')" class="mt-2" />
        </div>

        <div class="inline-block mt-4 -mx-1 pl-1 w-1/2">
            <x-input-label for="permanent_address" :value="__('Permanent Address')" />
            <x-text-input id="permanent_address" type="text" name="permanent_address" :value="old('permanent_address', $student->permanent_address)" required
                autofocus autocomplete="permanent_address" />
            <x-input-error :messages="$errors->get('permanent_address')" class="mt-2" />
        </div>

        <div class="inline-block mt-4 w-1/2 pr-1">
            <x-input-label for="last_institution" :value="__('Last Institution')" />
            <x-text-input id="last_institution" type="text" name="last_institution" :value="old('last_institution', $student->last_institution)" required
                autofocus autocomplete="last_institution" />
            <x-input-error :messages="$errors->get('last_institution')" class="mt-2" />
        </div>

        <div class="inline-block mt-4 -mx-1 pl-1 w-1/2">
            <x-input-label for="scholarship" :value="__('Scholarship')" />

            <select class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded border-0" name="scholarship"
                :value="old('scholarship', $student - > scholarship)" required>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
            <x-input-error :messages="$errors->get('scholarship')" class="mt-2" />
        </div>

        <div class="inline-block mt-4 w-1/2 pr-1">
            <x-input-label for="category_id" :value="__('Category')" />

            <select class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded border-0" name="category_id"
                :value="old('category_id', $student - > category_id)" required>
                @foreach (\App\Models\Category::all() as $category)
                    <option value="{{ $category->id }}"
                        {{ old('category_id', $student->category_id) == $category->id ? 'selected' : null }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
        </div>

        <div class="inline-block mt-4 -mx-1 pl-1 w-1/2">
            <x-input-label for="section_id" :value="__('Section')" />

            <select class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded border-0" name="section_id"
                :value="old('section_id', $student - > section_id)" required>
                @foreach (\App\Models\Section::all() as $section)
                    <option value="{{ $section->id }}"
                        {{ old('section_id', $student->section_id) == $section->id ? 'selected' : null }}>
                        {{ $section->name }}
                    </option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('section_id')" class="mt-2" />
        </div>

        <x-primary-button class="mt-6">
            {{ __('Update Student') }}
        </x-primary-button>
    </form>
    <x-message :message="session('message')" />
</x-main-layout>
