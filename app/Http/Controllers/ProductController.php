<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Supplier;

class ProductController extends Controller
{
    public function read(){
        $data = Product::all();
        return view('home', compact('data'));
    }
}
