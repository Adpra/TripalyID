<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Price;
use App\Models\Voucher;

class Triplay extends Model
{
    protected $fillable =['id','name','slug','description','image','imageCheckout'];

    public function Price(){
        return $this->hasMany(Price::class);
    }
    public function Voucher(){
        return $this->hasMany(Voucher::class);
    }
}
