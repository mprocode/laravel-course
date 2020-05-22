<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function products()
    {
        echo "<h1>Products list:</h1>";
        echo "<ol>";
        echo "<li>Notebook</li>";
        echo "<li>Printer</li>";
        echo "<li>Mouse </li>";
        echo "<li>Keyboard </li>";
        echo "</ol>"; 
    }

    public function productsView()
    {
        return view('products');
    }

    public function productsViewParams()
    {
        return view('products_params', [
            'products' => [
                ['id'=> 1, 'name'=>'Notebook'],
                ['id'=> 2, 'name'=>'Printer'],
                ['id'=> 3, 'name'=>'Mouse'],
                ['id'=> 4, 'name'=>'Keyboard'],
            ],
            'title' => 'Report - All Products'
        ]);
    }

    public function productsInfo($index = null)
    {
        $products= [
            ['id'=> 1, 'name'=>'Notebook', 'description' => "A short description about the Notebook" ], 
            ['id'=> 2, 'name'=>'Printer', 'description' => "A short description about the Printer" ], 
            ['id'=> 3, 'name'=>'Mouse', 'description' => "A short description about the Mouse" ], 
            ['id'=> 4, 'name'=>'Keyboard', 'description' => "A short description about the Keyboard" ], 
        ];
        $title = 'Report - All Products';
        
        $selected =  ($index != null && $index<count($products)) ? 
            $products[ $index ] : null;

        return view('products_info', 
            compact(['products', 'title', 'selected']));
    }

}
