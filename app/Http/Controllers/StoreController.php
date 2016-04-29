<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Category;
use CodeCommerce\Product;

class StoreController extends Controller
{
    private $categoryModel;
    private $productModel;

    public function __construct(Category $categoryModel, Product $productModel)
    {
        $this->categoryModel = $categoryModel;
        $this->productModel = $productModel;
    }

    public function index()
    {
        $pFeatured = $this->productModel->featured()->get();
        $pRecommend = $this->productModel->recommend()->get();
        $categories = $this->categoryModel->all();
        return view('store.index', compact('categories', 'pFeatured', 'pRecommend'));
    }

    public function show($id)
    {
        $productCategory = Product::ProductCategory($id)->get();
        //$productCategory = $this->productModel->where('category_id', '=', $id)->get();
        echo $productCategory;
    }
    
    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
