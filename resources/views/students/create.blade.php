<x-main-layout>


    <form action="{{ route('students.store') }}" method="post">
        @csrf

        <div>
            <x-input-label for="student_name" :value="__('student Name')" />
            <x-text-input id="student_name" type="text" name="student_name" :value="old('student_name')" required autofocus
                autocomplete="student_name" />
            <x-input-error :messages="$errors->get('student_name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="father_name" :value="__('Father Name')" />
            <x-text-input id="father_name" type="text" name="father_name" :value="old('father_name')" required autofocus
                autocomplete="father_name" />
            <x-input-error :messages="$errors->get('father_name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="profession" :value="__('Profession')" />
            <x-text-input id="profession" type="text" name="profession" :value="old('profession')" required autofocus
                autocomplete="student_name" />
            <x-input-error :messages="$errors->get('profession')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="mobile_number" :value="__('mobile_number')" />
            <x-text-input id="mobile_number" type="number" name="mobile_number" :value="old('mobile_number')" required autofocus
                autocomplete="mobile_number" />
            <x-input-error :messages="$errors->get('mobile_number')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="whatsapp_number" :value="__('whatsapp_number')" />
            <x-text-input id="whatsapp_number" type="number" name="whatsapp_number" :value="old('whatsapp_number')" required
                autofocus autocomplete="whatsapp_number" />
            <x-input-error :messages="$errors->get('whatsapp_number')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="birthdate" :value="__('birthdate')" />
            <x-text-input id="birthdate" type="date" name="birthdate" :value="old('birthdate')" required autofocus
                autocomplete="birthdate" />
            <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="religion" :value="__('religion')" />
            <x-text-input id="religion" type="text" name="religion" :value="old('religion')" required autofocus
                autocomplete="religion" />
            <x-input-error :messages="$errors->get('religion')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="present_address" :value="__('present_address')" />
            <x-text-input id="present_address" type="text" name="present_address" :value="old('present_address')" required
                autofocus autocomplete="present_address" />
            <x-input-error :messages="$errors->get('present_address')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="permanent_address" :value="__('permanent_address')" />
            <x-text-input id="permanent_address" type="text" name="permanent_address" :value="old('permanent_address')" required
                autofocus autocomplete="permanent_address" />
            <x-input-error :messages="$errors->get('permanent_address')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="last_institution" :value="__('last_institution')" />
            <x-text-input id="last_institution" type="text" name="last_institution" :value="old('last_institution')" required
                autofocus autocomplete="last_institution" />
            <x-input-error :messages="$errors->get('last_institution')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="scholarship" :value="__('scholarship')" />

            <select
                class="block mt-1 w-full border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm"
                name="scholarship" :value="old('scholarship')" required>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
            <x-input-error :messages="$errors->get('scholarship')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="category_id" :value="__('Category')" />

            <select
                class="block mt-1 w-full border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm"
                name="category_id" :value="old('category_id')" required>
                @foreach (\App\Models\Category::all() as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : null }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="section_id" :value="__('Section')" />

            <select
                class="block mt-1 w-full border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm"
                name="section_id" :value="old('section_id')" required>
                @foreach (\App\Models\Section::all() as $section)
                    <option value="{{ $section->id }}" {{ old('section_id') == $section->id ? 'selected' : null }}>
                        {{ $section->name }}
                    </option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('section_id')" class="mt-2" />
        </div>

        <x-primary-button class="mt-4">
            {{ __('Create Student') }}
        </x-primary-button>
    </form>
    <x-message :message="session('message')" />
</x-main-layout>
