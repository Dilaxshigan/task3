<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class product extends Controller
{
    public function product()
    {
        return view('product');
    }

    public function add_product()
    {
        return view('add_product');
    }
}
