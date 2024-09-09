<?php

namespace App\Http\Requests\Teaching\Subject;

use Illuminate\Foundation\Http\FormRequest;

/**
 * used when we store one subject
 * @author RANDRIANARISOA <maheninarandrianarisoa@gmail.com>
 * @copyright 2024 RANDRIANARISOA
 */
class StoreSubjectManagementRequest extends FormRequest
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
            'subjectName' => ['required','string','max:200'],
            'subjectCode' => ['required','string','max:200'],
            'coefficient' => ['required','string','max:200'],
        ];
    }
}
