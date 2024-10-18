<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class Productcontroller extends Controller
{
    public function index() {
        $products = Product::all();
        return view('Products.index', compact('products'));
    }
    public function create() {
        return view('Products.create');
}

public function store(Request $request){
    $request->validate(
        [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        Product::create($request->all());
        
}

}
