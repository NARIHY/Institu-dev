<?php

namespace App\Http\Requests\Teaching\Periods;

use Illuminate\Foundation\Http\FormRequest;

class PeriodStoreRequest extends FormRequest
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
            'period_name' => ['required','max:200'],
            'period_description'=> ['required'],
            'start_date'=> ['required','date'],
            'end_date'=> ['required','date']
        ];
    }
}
