<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name', 'price', 'category_id'
    ];

    public function history() {
        return $this->hasMany(App\History::class);
    }

    public function category() {
        return $this->hasMany(App\Category::class);
    }

    public function stock() {
        return $this->hasOne(App\Stock::class);
    }
}
