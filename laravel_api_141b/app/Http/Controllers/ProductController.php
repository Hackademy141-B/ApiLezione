<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index(){

        //molte volte le api sono collegate ad un token(gettone) se non si ha quel gettone l'api non risponde
        $apiResponse = Http::get('https://fakestoreapi.com/products')->json();

        $products = Arr::map($apiResponse, function($product){
            return [
                "id" => $product['id'],
                "title" => $product['title'],
                "price" => $product['price'],
                "description" => $product['description'],
                "category" => $product['category'],
                "image" => $product['image']
            ];
        });

        //dd($products);

        return view('product.index', compact('products'));
    }

    public function detailProduct($id){
        //dd($id);

        $product = Http::get('https://fakestoreapi.com/products/'.$id)->json();

        //dd($product);

        return view('product.detail', compact('product'));
    }

    public function productSorting($sortingType){
        //dd($sortingType);
        $products = Http::get('https://fakestoreapi.com/products?sort='.$sortingType)->json();

        return view('product.index', compact('products'));
    }

    public function productByCategory($categorySelected){
        //dd($categorySelected);
        $productByCategory = Http::get('https://fakestoreapi.com/products/category/'.$categorySelected)->json();

        //dd($productByCategory);
        return view('product.index', ['products'=>$productByCategory]);
    }
}
