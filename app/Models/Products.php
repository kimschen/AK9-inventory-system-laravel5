<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;


class Products extends Model
{
    use SyncsWithFirebase;

    protected $fillable = [
        'name',
        'unit_cost',
        'quantity',
        'channel',
        'supplier',
        'image_path'
    ];

    /**
     * The attributes that should be visible in arrays.
     *
     * @var array
     */

    protected $visible = [
        'id',
        'name',
        'unit_cost',
        'quantity',
        'channel',
        'supplier',
        'image_path'
    ];
}
