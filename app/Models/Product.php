<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;


class Product extends Model
{
    use SyncsWithFirebase;

    protected $fillable = [
        'product_name',
        'unit_cost',
        'quantity',
        'channel',
        'supplier',
        'image_path'
    ];

    protected $visible = [
        'id',
        'product_name',
        'unit_cost',
        'quantity',
        'channel',
        'supplier',
        'image_path'
    ];
}
