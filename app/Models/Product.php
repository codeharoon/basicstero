<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function stock(){
        return $this->hasMany(ProductStock::class,'product_id','id');
    }
    public function classification(){
        return $this->belongsTo(Classification::class,'classification_id','id');   
    }
    
}
