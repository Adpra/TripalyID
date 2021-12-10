<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceReseller extends Model
{

    protected $fillable = ['id','gameReseller_id','price','item'];


    public function GameReseller(){
        return $this->BelongsTo(GameReseller::class);
    }

}
