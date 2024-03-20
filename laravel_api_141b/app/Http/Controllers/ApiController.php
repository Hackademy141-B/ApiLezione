<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function allProducts(){
        $products = Http::get('https://fakestoreapi.com/products')->json();

        return response($products)->getContent();
    }
}
