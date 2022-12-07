<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){

        
        $list_products = array(
            array(
                'id' => 100,
                'name' => "jabón",
                'description' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam dolorum laborum esse placeat distinctio doloremque excepturi modi beatae at iusto atque dolor eum enim ullam rem, eos non magni provident!"
            ),
            array(
                'id' => 101,
                'name' => "shampoo",
                'description' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam dolorum laborum esse placeat distinctio doloremque excepturi modi beatae at iusto atque dolor eum enim ullam rem, eos non magni provident!"
            ),
            array(
                'id' => 102,
                'name' => "cepillos",
                'description' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam dolorum laborum esse placeat distinctio doloremque excepturi modi beatae at iusto atque dolor eum enim ullam rem, eos non magni provident!"
            )
        
        );
        

        return view('products', [ 'products' => $list_products ]);
    }

    public function single($id){

        $list_products = array(
            array(
                'id' => 100,
                'name' => "jabón",
                'description' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam dolorum laborum esse placeat distinctio doloremque excepturi modi beatae at iusto atque dolor eum enim ullam rem, eos non magni provident!"
            ),
            array(
                'id' => 101,
                'name' => "shampoo",
                'description' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam dolorum laborum esse placeat distinctio doloremque excepturi modi beatae at iusto atque dolor eum enim ullam rem, eos non magni provident!"
            ),
            array(
                'id' => 102,
                'name' => "cepillos",
                'description' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam dolorum laborum esse placeat distinctio doloremque excepturi modi beatae at iusto atque dolor eum enim ullam rem, eos non magni provident!"
            )
        
        );

        switch ($id) {
            case 100:
                $product = $list_products[0];
                break;
            case 101:
                $product = $list_products[1];
                break;
            default:
                $product = $list_products[2];
                break;
        }


        return view('product', [ 'product' => $product ]);
    }
}
