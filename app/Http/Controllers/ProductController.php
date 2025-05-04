<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $show= Product::all();
        return view('Product.list',compact('show'));
    }
    public function form()
    {
        return view('Product.Create');
    }
    public function store(Request $request)
    {
        Product::create(
         [
                'Date'=>$request->date,
                'Product_name'=>$request->name,
                'Price'=>$request->price,
        ]);
           
   return redirect('/Pr_list');
        }
        public function delete($id)
    {
        $del =Product::find($id);
        $del->delete();
        return redirect('/Pr_list');
    }
    public function edit($id)
    {
        $edit=Product::find($id);
        return view('Product.edit',compact('edit'));
    }
    public function update(Request $request, $id)
    {
        $update=Product::find($id);
        $update->Date=$request->date;
        $update->Product_name=$request->name;
        $update->Price=$request->price;
        $update->save();
        return redirect('/Pr_list');
    }
}
