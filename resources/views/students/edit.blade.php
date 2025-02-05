<x-main-layout>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <x-input-label for="student_name" :value="__('Student Name')" />
            <x-text-input id="student_name" type="text" name="student_name" :value="old('student_name', $student->student_name)" required autofocus />
            <x-input-error :messages="$errors->get('student_name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="father_name" :value="__('Father Name')" />
            <x-text-input id="father_name" type="text" name="father_name" :value="old('father_name', $student->father_name)" required />
            <x-input-error :messages="$errors->get('father_name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="profession" :value="__('Profession')" />
            <x-text-input id="profession" type="text" name="profession" :value="old('profession', $student->profession)" required />
            <x-input-error :messages="$errors->get('profession')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="mobile_number" :value="__('Mobile Number')" />
            <x-text-input id="mobile_number" type="number" name="mobile_number" :value="old('mobile_number', $student->mobile_number)" required />
            <x-input-error :messages="$errors->get('mobile_number')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="whatsapp_number" :value="__('WhatsApp Number')" />
            <x-text-input id="whatsapp_number" type="number" name="whatsapp_number" :value="old('whatsapp_number', $student->whatsapp_number)" required />
            <x-input-error :messages="$errors->get('whatsapp_number')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="birthdate" :value="__('Birthdate')" />
            <x-text-input id="birthdate" type="date" name="birthdate" :value="old('birthdate', $student->birthdate)" required />
            <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="religion" :value="__('Religion')" />
            <x-text-input id="religion" type="text" name="religion" :value="old('religion', $student->religion)" required />
            <x-input-error :messages="$errors->get('religion')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="present_address" :value="__('Present Address')" />
            <x-text-input id="present_address" type="text" name="present_address" :value="old('present_address', $student->present_address)" required />
            <x-input-error :messages="$errors->get('present_address')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="permanent_address" :value="__('Permanent Address')" />
            <x-text-input id="permanent_address" type="text" name="permanent_address" :value="old('permanent_address', $student->permanent_address)" required />
            <x-input-error :messages="$errors->get('permanent_address')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="last_institution" :value="__('Last Institution')" />
            <x-text-input id="last_institution" type="text" name="last_institution" :value="old('last_institution', $student->last_institution)" required />
            <x-input-error :messages="$errors->get('last_institution')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="scholarship" :value="__('Scholarship')" />

            <select name="scholarship" class="block mt-1 w-full border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
                <option value="Yes" {{ old('scholarship', $student->scholarship) == 'Yes' ? 'selected' : '' }}>Yes</option>
                <option value="No" {{ old('scholarship', $student->scholarship) == 'No' ? 'selected' : '' }}>No</option>
            </select>
            <x-input-error :messages="$errors->get('scholarship')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="category_id" :value="__('Category')" />

            <select name="category_id" class="block mt-1 w-full border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
                @foreach (\App\Models\Category::all() as $category)
                    <option value="{{ $category->id }}" {{ old('category_id', $student->category_id) == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="section_id" :value="__('Section')" />

            <select name="section_id" class="block mt-1 w-full border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
                @foreach (\App\Models\Section::all() as $section)
                    <option value="{{ $section->id }}" {{ old('section_id', $student->section_id) == $section->id ? 'selected' : '' }}>
                        {{ $section->name }}
                    </option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('section_id')" class="mt-2" />
        </div>

        <x-primary-button class="mt-4">
            {{ __('Update Student') }}
        </x-primary-button>
    </form>

</x-main-layout>
