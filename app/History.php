<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = [
        'product_id', 'curent_price', 'quantity', 'user_id'
    ];

    public function user() {
        return $this->belongsTo(App\User::class);
    }

    public function product() {
        return $this->belongsTo(App\Product::class);
    }

}
