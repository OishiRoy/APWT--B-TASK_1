<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductCOntroller extends Controller
{
    public function show(){
        $items = array('sharee','Kurti','Paanjabi','Kaftaan','Shirt');
        return view('pages.products', ['products'=>$items]);
    }
}
