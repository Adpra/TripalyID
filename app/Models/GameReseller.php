<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameReseller extends Model
{
    protected $fillable = ['id','name'];

    public function PriceReseller(){
        return $this->hasMany(PriceReseller::class);

    }
}
