<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{
    use HasFactory;
    protected $fillable=["name","colors_id","sizes_id","money_id","categories_id"];
    public function product_colors(){
        return $this->belongsTo(Color::class,"colors_id");
    }
    public function product_sizes(){

        return $this->belongsTo(Size::class,"sizes_id");
       
    }
    public function product_money(){
       
        return $this->belongsTo(Money::class,"money_id");
        
    }
    public function product_categories(){
    
        return $this->belongsTo(Category::class,"categories_id");
    }
}
