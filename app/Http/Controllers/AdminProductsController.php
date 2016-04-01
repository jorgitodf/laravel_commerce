<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Product;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class AdminProductsController extends Controller
{
    private $products;

    public function __construct(Product $product)
    {
        $this->middleware('guest');
        $this->products = $product;
    }

    
    public function index()
    {
        $products = $this->products->all();
        return view('product',  compact('products'));
    }

    public function create()
    {
        return "Página de Create referente ao registro de Products";
    }

    public function store()
    {
        return "Método para salvar o registro de Products";
    }

    public function destroy($id)
    {
        return "Método para apagar o registro de Products";
    }

    public function edit($id)
    {
        return "Método para Editar o registro de Products";
    }
}
