<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class order extends Controller
{
    public function order()
    {
        return view('order');
    }
}
