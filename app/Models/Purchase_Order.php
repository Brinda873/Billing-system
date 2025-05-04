<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase_Order extends Model
{
    protected $table ='purchase';
    protected $fillable=[
     'Date',
     'Product_name',
     'Quantity',
     'Price',
     'Total',
    ];
}
