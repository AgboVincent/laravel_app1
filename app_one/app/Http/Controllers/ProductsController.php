<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title = "Welcome to my laravel course";
        $description = "Created by sir vint";
        print_r(route('products'));

        $data = [
            "productOne" => "iPhone",
            "productTwo" => "Samsung"
        ];
        return 
            //view('products.index', compact('title', 'description'));
            view('products.index', [
                'data' => $data
            ]);
    }

    public function show($name){
        $data = [
            "iphone" => "iPhone",
            "samsung" => "Samsung"
        ];

        return view('products.index', [
            'products' => $data[$name] ?? 'product ' . $name . ' does not exist'
        ]);
    }
}
