<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException; //response json
use Illuminate\Contracts\Validation\Validator;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class EditUserRequest extends FormRequest {

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
        $user = Auth::user();
        return [
            'password' => ['required_with:oldpassword', 'nullable', 'string', 'min:8', 'confirmed'],
            'oldpassword' => 'required_with:password',
            'email' => ['required', 'string', 'email', 'max:50', Rule::unique('utente', 'email')->ignore($user->id)],
            'nome' => ['required', 'string', 'max:20'],
            'cognome' => ['required', 'string', 'max:20'],
            'residenza' => ['required', 'string', 'max:50'],
            'data_nasc' => ['required', 'before_or_equal:today'],
            'occupazione' => ['required'],
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
