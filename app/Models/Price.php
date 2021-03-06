<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = ['id','harga','item'];

    public function triplay(){
        return $this->BelongsTo(Triplay::class);
    }
}
