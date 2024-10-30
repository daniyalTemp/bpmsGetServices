<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mapStatus extends Model
{
    protected $table = 'mapstatus';
    protected $fillable =
        [
            'id',
            'name',
        ];
}
