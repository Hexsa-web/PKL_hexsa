<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $fillable = ['category_id','name','slug','description','image','price','stock'];
    public function product()
        {
            return $this->belongsTo(Product::class);
        }

         public function cart()
    {
        return $this->hasMany(Cart::class);
    }
}
