<?php



namespace App\BaseContext;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;


class ApiRequest extends FormRequest{


    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(data: ['Error'=>$validator->errors()],status: 400));
    }

    
}