<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class NewProductRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        // Nella form non mettiamo restrizioni d'uso su base utente
        // Gestiamo l'autorizzazione ad un altro livello
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'nome' => 'required|max:50',
            'sottocategoria' => 'required',
            'marca' => 'require|max:30',
            'descShort' => 'required|max:100',
            'descLong' => 'required|max:3000',
            'immagine' => 'image|max:2048',
            'prezzo' => 'required|numeric|min:0',
            'sconto' => 'required|integer|min:0|max:99',
        ];
    }

}