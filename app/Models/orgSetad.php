<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class orgSetad extends Model
{
    protected $table = 'orgsetad';
    protected $fillable =
        [
            'id',
            'mainOrg',

        ];
}
