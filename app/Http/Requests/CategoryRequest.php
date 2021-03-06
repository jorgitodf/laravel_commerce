<?php

namespace CodeCommerce\Http\Requests;

use CodeCommerce\Http\Requests\Request;

class CategoryRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
           'name' => 'required',
           'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo Nome é obrigatório',
            'description.required' => 'O campo Descrição é obrigatório'
        ];
    }
}
