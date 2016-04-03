<?php

namespace CodeCommerce\Http\Requests;

use CodeCommerce\Http\Requests\Request;

class ProductRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
           'name' => 'required',
           'description' => 'required',
           'price' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O Nome do Produto é obrigatório',
            'description.required' => 'A Descrição do Produto é obrigatório',
            'price.required' => 'O Preço do Produto é obrigatório'
        ];
    }
}
