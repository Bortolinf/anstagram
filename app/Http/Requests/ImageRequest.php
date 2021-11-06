<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image' => 'required|mimes:jpg,png,jpeg|max:2000'
        ];
    }

    public function messages() {
        return [
            'image.required' => 'Deve ser selecionada uma imagem',
            'image.mimes' => 'Formato da imagem invalido',
            'image.max' => 'Tamanho da Imagem superior a 2MB'
        ];
    }
}
