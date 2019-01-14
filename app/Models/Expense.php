<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class Expense extends Model
{
    use SyncsWithFirebase;

    protected $fillable = [
        'description',
        'cost',
        'channel',
    ];

    protected $visible = [
        'id',
        'date',
        'description',
        'cost',
        'channel',
    ];
}
