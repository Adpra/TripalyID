<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $fillable = ['id','voucher'];

    public function triplay(){
        return $this->BelongsTo(Triplay::class);
    }
}
