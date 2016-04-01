<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use CodeCommerce\Http\Requests;

class AdminCategoriesController extends Controller
{
    private $categories;

    public function __construct(Category $category)
    {
        $this->middleware('guest');
        $this->categories = $category;
    }


    public function index()
    {
        $categories = $this->categories->all();
        return view('category',  compact('categories'));
    }

    public function create()
    {
        return "Página de Create referente ao registro de Categories";
    }

    public function store()
    {
        return "Método para Salvar o registro de Categories";
    }

    public function destroy($id)
    {
        return "Método para Apagar o registro de Categories";
    }

    public function edit($id)
    {
        return "Método para Editar o registro de Categories";
    }
}
