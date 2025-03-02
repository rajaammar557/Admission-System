<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AcademicRecordRequest extends FormRequest
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
            'exam_type'   => 'required|in:SSC,HSSC',
            'year'        => 'required|integer|digits:4|min:1900|max:' . date('Y'),
            'roll_no'     => 'required|integer',
            'marks'       => 'required|integer|min:0',
            'percentage'  => 'required|numeric|between:0,100',
            'board'       => 'required|string|max:255',
            'group'       => 'required|in:Science,Arts',
        ];
    }
}
