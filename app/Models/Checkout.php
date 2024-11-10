<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checkout extends Model
{
    //

    protected $fillable = [
        'user_id',
        'camp_id',
        'card_numnber',
        'expired',
        'cvc',
        'is_paid'
    ];

}
