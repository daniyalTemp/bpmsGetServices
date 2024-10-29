<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maps extends Model
{
    use HasFactory;
    protected $table='Maps';
    protected $fillable=[
        'mainOrg',
        'mapData',
        'prOrg',
        'statusList',
    ];
    public $timestamps=false;
    protected $casts=[
        'statusList'=>'array'
    ];
}
