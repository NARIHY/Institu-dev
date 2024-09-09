<?php

namespace App\Http\Requests\Teaching\Subject;

use Illuminate\Foundation\Http\FormRequest;

/**
 * used when we update one subject
 * @author RANDRIANARISOA <maheninarandrianarisoa@gmail.com>
 * @copyright 2024 RANDRIANARISOA
 */
class UpdateSubjectManagementRequest extends FormRequest
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
            'subjectName' => ['sometimes','string','max:200'],
            'subjectCode' => ['sometimes','string','max:200'],
            'coefficient' => ['sometimes','string','max:200'],
        ];
    }
}
