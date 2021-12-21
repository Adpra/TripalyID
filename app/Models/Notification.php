<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'nameId',
        'name',
        'price',
        'item',
        'status',
        'description',
        'rofile_picture',
        'user_id',

    ];
}
