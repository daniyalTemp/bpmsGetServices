<?php

namespace App\Imports;

use App\Models\Maps;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class MapsImportClass implements ToModel
{
    /**
     * @param Collection $collection
     */
    public function model(array $row)
    {
        if ($row[1] == 'نام ستادی دستگاه متولی') {

        } else{
//            dd($row );
//            $extra = array_slice($row , 4 , 32);
            return new Maps([
                'mainOrg' =>$row[1],
                'mapData'=>$row[3],
                'prOrg'=>$row[2],
                'statusList'=>array_slice($row , 4 , 32),
            ]);
        }

    }

}
