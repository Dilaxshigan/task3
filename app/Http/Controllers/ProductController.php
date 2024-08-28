<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function product()
    {
        $product_s = Product::paginate(6);
        return view('product', compact('product_s'));
    }

    public function add_product()
    {
        return view('add_product');
    }

    public function upload_product(Request $request)
    {
        $data = new Product;
    
        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $image=$request->image;

        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request-> image->move('products', $imagename);
            $data->image = $imagename;
        }
    
        $data->save();
    
        return redirect()->back();
    }

    public function delete_product($id)
    {
        $data = Product::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function edit_product($id)
    {
        $data = Product::find($id);
        return view('edit_product', compact('data'));
    }

    public function update_product(Request $request, $id)
    {
        $data = Product::find($id);

        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;

        $data->save();
        return redirect('/product');
        
    }

}
