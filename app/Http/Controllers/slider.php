<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class slider extends Controller
{
    public function slider()
    {
        return view('slider');
    }
}

