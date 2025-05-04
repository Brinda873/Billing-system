<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='product';
       protected $fillable=[
        'Date',
        'Product_name',
        'Price',
        
       ];
}
