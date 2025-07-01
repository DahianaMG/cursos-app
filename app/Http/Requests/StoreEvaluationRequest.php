<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEvaluationRequest extends FormRequest
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
            'enrollment_id' => ['required', 'integer', 'exists:enrollments,id'],
            'score' => ['required', 'numeric', 'min:0', 'max:100'],
            'feedback' => ['nullable', 'string']
        ];
    }

    public function messages(): array
    {
        return [
            'enrollment_id.required' => 'The enrollment is required.',
            'enrollment_id.exists' => 'The selected enrollment does not exist.',
            'score.required' => 'The score is required.',
            'score.numeric' => 'The score must be a number.',
            'score.min' => 'The score can not be less than 0.',
            'score.max' => 'The score can not be greater than 100.'
        ];
    }
}
