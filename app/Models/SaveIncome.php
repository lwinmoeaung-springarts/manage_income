<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaveIncome extends Model
{
    protected $dates = ['created_at', 'updated_at'];
    protected $table='incomes';
    protected $fillable=[

       'save_id',
       'income'

    ];
}
