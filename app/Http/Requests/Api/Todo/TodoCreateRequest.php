<?php

namespace App\Http\Requests\Api\Todo;

use App\BaseContext\ApiRequest;

class TodoCreateRequest extends ApiRequest
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
            'title' => ['required', 'string', 'min:1'],
            'description' => ['required', 'string', 'min:1'],
            // 'owner' => ['nullable','int', 'min:1'],
        ];
    }
}
