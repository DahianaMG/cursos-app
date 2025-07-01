<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
        $courseId = $this->route('id');

        return [
            'title' => ['required', 'string', 'max:150', Rule::unique('courses', 'title')->ignore($courseId)],
            'description' => ['required', 'string'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'created_by' => ['required', 'integer', 'exists:users,id']
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'The title field is required.',
            'title.unique' => 'A course with this title already exists.',
            'title.max' => 'The title can not be greater than 150 characters.',
            'description.required' => 'The description field is required.',
            'category_id.required' => 'The category is required.',
            'category_id.exists' => 'The selected category does not exist.',
            'created_by.required' => 'The user is required.',
            'created_by.exists' => 'The user does not exist.'
        ];
    }
}
