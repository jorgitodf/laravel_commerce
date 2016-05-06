<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Category;
use CodeCommerce\Product;
use CodeCommerce\Tag;

class StoreController extends Controller
{
    private $categoryModel;
    private $productModel;
    private $tagModel;

    public function __construct(Category $categoryModel, Product $productModel, Tag $tagModel)
    {
        $this->categoryModel = $categoryModel;
        $this->productModel = $productModel;
        $this->tagModel = $tagModel;
    }

    public function index()
    {
        $pFeatured = $this->productModel->featured()->get();
        $pRecommend = $this->productModel->recommend()->get();
        $categories = $this->categoryModel->all();
        return view('store.index', compact('categories', 'pFeatured', 'pRecommend'));
    }

    public function category($id)
    {
        $categories = $this->categoryModel->all();
        $category = $this->categoryModel->find($id);
        $productCategory = $this->productModel->OfCategory($id)->get();
        return view('store.category', compact('productCategory', 'categories', 'category'));
    }

    public function product($id)
    {
        $categories = $this->categoryModel->all();
        $product = $this->productModel->find($id);
        return view('store.product', compact('categories', 'product'));
    }

    public function tag($id)
    {
        $categories = $this->categoryModel->all();
        $tag = $this->tagModel->find($id);
        $products = $tag->products;
        return view('store.tag', compact('categories', 'products', 'tag'));
    }

}
