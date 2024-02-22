<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LinkChildChoreRequest extends FormRequest
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
            'child_id' => 'required|exists:child,id',
            'chore_id' => 'required|exists:chores,id',
        ];
    }
}
