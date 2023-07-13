<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cash extends Model
{
    use HasFactory;
    protected $fillable=["categories_id","colors_id","sizes_id"];
    public function product_colors(){
        return $this->belongsTo(Color::class,"colors_id");
    }
    public function product_sizes(){

        return $this->belongsTo(Size::class,"sizes_id");
       
    }
    public function product_categories(){
    
        return $this->belongsTo(Category::class,"categories_id");
    }
    public function product_category(){
        return $this->hasmany(card::class,"cashes_id");
    }

}
