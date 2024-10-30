<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class proListOrg extends Model
{
    protected $table = 'proListOrg';
    protected $fillable=[
        'id',
        'poOrg',
    ];
}
