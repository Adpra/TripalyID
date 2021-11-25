<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Triplay extends Model
{
    protected $fillable =['id','nama','deskripsi','image','imageCheckout'];
}
