<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\Exceptions\HttpResponseException; //response json
use Illuminate\Contracts\Validation\Validator;
use Symfony\Component\HttpFoundation\Response;

class NewProductRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'nome' => 'required|min:5|max:50',
            'sottocategoria' => 'required',
            'marca' => 'required|max:30',
            'desc_breve' => 'required|min:20|max:100',
            'desc_esaustiva' => 'required|max:3000',
            'immagine' => 'file|mimes:jpeg,png,webp|max:2048',
            'prezzo' => 'required|numeric|min:0.01|max:99999.99',
            'sconto' => 'integer|min:1|max:99|nullable'
        ];
    }

    /**
     * Response in Json Format
     * Override Form Request    
     * 
     */
    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY));
    }

}
