<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class degree extends Model
{
    use HasFactory;
    protected $table='degrees';
    protected $fillable=[
      'debt',
      'status',
      'major',
      'grade',
      'stNumber',
      'nationalCode',
      'fullName',
    ];
}
