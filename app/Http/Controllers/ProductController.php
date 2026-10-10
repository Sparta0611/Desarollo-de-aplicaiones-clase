<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['ID-1' => 1, 'Frutas' => 'Manzana', 'Precio' => 1000],
            ['ID-2' => 2, 'Frutas' => 'Pera', 'Precio' => 2000],
            ['ID-3' => 3, 'Frutas' => 'Uvas', 'Precio' => 3000],
        ];
        return Inertia::render('products/index',[
            'products' => $products
        ]);
    }
}
