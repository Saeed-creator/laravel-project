<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //s
    public function index()
    {
        $products = [
            ['id' => 1, 'name' => 'Mobile', 'price' => 10.99],
            ['id' => 2, 'name' => 'Microwave', 'price' => 19.99],
            ['id' => 3, 'name' => 'dish', 'price' => 29.99],
        ];
        return $products;
    }
    public function show($id)
    {
        $products = [
            ['id' => 1, 'name' => 'Pizza', 'price' => 10.99],
            ['id' => 2, 'name' => 'Salat', 'price' => 19.99],
            ['id' => 3, 'name' => 'Sandwich', 'price' => 29.99],
        ];
        $product = collect($products)->firstWhere('id', $id);

        if ($product) {
            return $product;
        } else {
            return "Error Not Found";
        }
    } 
}
