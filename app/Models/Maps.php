<?php

namespace App\Models;

use App\Casts\orgcast;
use App\Casts\ProOrgcast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function PHPUnit\Framework\exactly;

class Maps extends Model
{
    use HasFactory;

    protected $table = 'Maps';
    protected $fillable = [
        'mainOrg',
        'mapData',
        'prOrg',
        'statusList',
    ];


    private $proList = [
        'البرز',
        'تهران',
        'گلستان',
        'گیلان',
        'خوزستان',
        'اصفهان',
        'خراسان رضوی',
        'مازندران',
        'فارس',
        'آذربایجان شرقی',
        'آذربایجان غربی',
        'قزوین',
        'اردبیل',
        'چهارمحال و بختیاری',
        'کرمانشاه',
        'کردستان',
        'مرکزی',
        'زنجان',
        'لرستان',
        'هرمزگان',
        'همدان',
        'یزد',
        'قم',
        'بوشهر',
        'خراسان شمالی',
        'کهگیلویه و بویراحمد',
        'کرمان',
        'ایلام',
        'خراسان جنوبی',
        'سمنان',
        'سیستان و بلوچستان',


    ];

    public function getStatusList()
    {
        $myArray = ($this->castAttribute('statusList', $this->attributes['statusList']));
//        dd(new \App\Utility\mapstatus('s','s'));
        $final = [];
      for ($i = 1 ;$i < count($this->proList);$i++) {
          $final[$i]=new \App\Utility\mapstatus($this->proList[$i] , mapStatus::where('name',$myArray[$i])->first()->_id);
      }
      dd($final);
    }

    public $timestamps = false;
    protected $casts = [
        'statusList' => 'array',
        'mainOrg' => orgcast::class,
        'prOrg' => ProOrgcast::class,
    ];
}
