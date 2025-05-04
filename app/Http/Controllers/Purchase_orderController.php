<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Stock;
use App\Models\Purchase_Order;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;


class Purchase_orderController extends Controller
{
    public function index(Request $request)
    {$date=Purchase_Order::query()
        ->when($request->filled('date1') && $request->filled('date2'), 
        fn($q) => $q->whereBetween('created_at', [$request->date1, $request->date2])
    )
    ->orWhere(fn($q) => $q
        ->when($request->filled('price'), fn($q) => $q->where('Price', $request->price))
        ->when($request->filled('total'), fn($q) => $q->where('Total', $request->total))
        ->when($request->filled('name'), fn($q) => $q->where('Productname', $request->name))
    );


    //     $date=Purchase_Order::query();
    // if($request->filled('date1') && $request->filled('date2'))
    // {
    //     $date->whereBetween('created_at',[$request->date1,$request->date2]);
    // }
    // if($request->filled('price'))
    // {
    //     $date->orwhere('Price',$request->price);
    // }
    $purchase=$date->get();
        
        return view('Purchase.list',compact('purchase'));
    }
    

    public function form()
    {
        $show= Product::all();
        return view('Purchase.Create',compact('show'));
    }
    public function store(Request $request)
    {
             $id=$request->input('id');
             $date = $request->input('date');
             $name = $request->input('name');
             $price = $request->input('price');
             $quantity = $request->input('quantity');
             $total=$request->input('total');
            //  print_r($name);

            $pcount = count($name);
            for($i=0; $i<$pcount; $i++)
            {
                if (!empty($name[$i])) {
                    $soDetail = Purchase_Order::where('id', $id[$i])
                                ->where('product_name', $name[$i])
                                ->first();
                    
                    if ($soDetail) {
                     $soDetail->Quantity=$quantity[$i];
                     $soDetail->Total=$total[$i];
                     $soDetail->updated_at = now();
                     $soDetail->save();
                     } else {
                     $soDetail = new Purchase_Order();
                     $soDetail->id = $id[$i];
                     $soDetail->Date = $date[$i];
                     $soDetail->product_name = $name[$i];
                     $soDetail->Quantity=$quantity[$i];
                     $soDetail->Price = $price[$i];
                     $soDetail->Total=$total[$i];
                     $soDetail->save();
                     }
                }
                // Purchase_order::create([
                //     'Date'=>$date[$i],
                //     'Product_name'=>$name[$i],
                //     'Quantity'=>$quantity[$i],
                //     'Price'=>$price[$i],
                //     'Total'=>$total[$i],

                // ]);
                $stock = Stock::where('Product_name', $name[$i])->first();
                if ($stock) {
                    $stock->decrement('Quantity', $quantity[$i]); 
                }
            }
            //    return redirect('list');
        // Purchase_Order::create(
        //  [
        //         'Date'=>$request->date,
        //         'Product_name'=>$request->name,
        //         'Quantity'=>$request->quantity,
        //         'Price'=>$request->price,
        //         'Total'=>$request->total,
        // ]);
           
                return redirect('/Po_list');
        }
        public function delete($id)
    {
        $del =Purchase_Order::find($id);
        $del->delete();
        return redirect('/Po_list');
    }
    public function edit($id)
    {
        $edit=Purchase_Order::find($id);
        return view('Purchase.edit',compact('edit'));
    }
    public function update(Request $request, $id)
    {
        $update=Purchase_Order::find($id);
        $update->Date=$request->date;
        $update->Product_name=$request->name;
        $update->Quantity=$request->quantity;
        $update->Price=$request->price;
        $update->Total=$request->total;
        $update->save();
        return redirect('/Po_list');
    }
}

// public function index1(Request $request)
    // {
    //     // $show= Purchase_Order::all();
    //     $date=Purchase_Order::whereBetween('created_at',[$request->date1,$request->date2])->get();
    //     return view('Purchase.list',compact('date'));
    // }
    // public function index(Request $request)
    // {
    //     // $show= Purchase_Order::all();
    //     // $date=Purchase_Order::all()->whereBetween('created_at',[$request->date1,$request->date2])->orwhere('Price',$request->Price )->orwhere('Total', $request->tPrice)->get();
    //     $date=DB::select("SELECT * FROM purchase WHERE(created_at>=? AND created_at<=?) OR (Price=?)",[$request->date1,$request->date2,$request->Price]);
    //     return view('Purchase.list',compact('date'));
    //     // print_r($date);
    // }
