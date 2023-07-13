<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=["product_category"];
    public function product_category(){
        return $this->hasmany(Cash::class,"categories_id");
    }
}
