<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    protected $dates = ['created_at', 'updated_at'];
    protected $table='wishes';
    protected $fillable=[

       'item',
       'price'

    ];
}
