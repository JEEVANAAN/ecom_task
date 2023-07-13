<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Money extends Model
{
    use HasFactory;
    protected $fillable=["money"];
    public function product_money(){
        return $this->hasmany(ProductDetails::class,"money_id");
    }
}
