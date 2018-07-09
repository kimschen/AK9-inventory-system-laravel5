<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'name', 'unit_cost', 'quantity', 'channel', 'supplier', 'image_path'
    ];

}
