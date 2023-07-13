<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class card extends Model
{
    use HasFactory;
    protected $fillable=["user_id","cashes_id"];
    public function card_id(){
        return $this->belongsTo(User::class,"user_id");
    }
    public function card_cashes(){
        return $this->belongsTo(Cash::class,"cashes_id");
    }
   
}
