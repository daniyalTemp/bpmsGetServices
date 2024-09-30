<?php

namespace App\Models;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sampleData extends Model implements ShouldQueue
{
    use HasFactory;
    protected $table = 'sampledata';
    protected $fillable = [
        'name',
        'org',
        'uid',
    ];
}
