<?php

namespace App\Models;
use App\Models\PricePulse;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pulse extends Model
{
    protected $fillable =['id','name','slug','description','image'];

    public function pricePulse(){
        return $this->hasMany(PricePulse::class);
    }

}
