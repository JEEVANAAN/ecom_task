<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $fillable=["size_number"];
    public function product_size(){
        return $this->hasmany(Cash::class,"sizes_id");
    }
}
