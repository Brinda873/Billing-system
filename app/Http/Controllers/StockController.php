<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $show= Stock::all();
        return view('Stock.list',compact('show'));
    }
    public function form()
    {
        return view('Stock.Create');
    }
    public function store(Request $request)
    {
        stock::create(
         [
                'Date'=>$request->date,
                'Product_name'=>$request->name,
                'Quantity'=>$request->quantity,
                
        ]);
           
   return redirect('/st_list');
        }
        public function delete($id)
    {
        $del =stock::find($id);
        $del->delete();
        return redirect('/st_list');
    }
    public function edit($id)
    {
        $edit=stock::find($id);
        return view('Purchase.edit',compact('edit'));
    }
    public function update(Request $request, $id)
    {
        $update=stock::find($id);
        $update->Date=$request->date;
        $update->Product_name=$request->name;
        $update->Quantity=$request->quantity;
        $update->save();
        return redirect('/st_list');
    }
}
