<?php

namespace CodeCommerce\Http\Requests;

use CodeCommerce\Http\Requests\Request;

class ProductImageRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'image' => 'image',
            'image' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'image.image' => 'O arquivo deve ser uma Imagem',
            'image.required' => 'Você deve selecionar uma Imagem'
        ];
    }

}
