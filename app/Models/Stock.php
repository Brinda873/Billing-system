<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table ='stock';
       protected $fillable=[
        'Date',
        'Product_name',
        'Quantity',
         ];
}
