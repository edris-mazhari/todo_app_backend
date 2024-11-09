<?php

namespace App\Http\Requests\Api;

use App\BaseContext\ApiRequest;
use Illuminate\Foundation\Http\FormRequest;

class LoignRequest extends ApiRequest
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
            'email' => ['required', 'string', 'min:1', 'max:255'],
            'password' => ['required', 'string', 'min:1', 'max:255']
        ];
    }
}
