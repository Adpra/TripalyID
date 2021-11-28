<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricePulse extends Model
{
    protected $fillable = ['id','pulse_id','price','item'];

    public function pulse(){
        return $this->BelongsTo(Pulse::class);
    }
}
