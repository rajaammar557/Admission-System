<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'student_name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'mobile_number' => 'required|numeric',
            'whatsapp_number' => 'nullable|numeric',
            'birthdate' => 'required|date',
            'religion' => 'required|string|max:255',
            'present_address' => 'required|string',
            'permanent_address' => 'required|string',
            'last_institution' => 'nullable|string',
            'scholarship' => 'required|in:Yes,No',
            'category_id' => 'required|exists:categories,id',
            'section_id' => 'required|exists:sections,id',
        ];
    }
}
