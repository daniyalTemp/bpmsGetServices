<?php

namespace App\Http\Controllers;

use App\Imports\MapsImportClass;
use App\Models\MapData;
use App\Models\Maps;
use App\Models\mapStatus;
use App\Models\orgSetad;
use App\Models\proListOrg;
use App\Models\sampleData;
use Cassandra\Map;
use Faker\Core\File;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class mainController extends Controller
{
    public function show()
    {
//        $maps=Maps::all();
//dd(orgSetad::all());
//dd(mapStatus::all());
//        $file = \Illuminate\Support\Facades\File::get(public_path('mapsSapmle.xlsx'));
//        Excel::import(new MapsImportClass(), public_path('mapsSapmle.xlsx'));

//dd(proListOrg::all());

        $data = Maps::find(19);
        dd($data->getStatusList());
//        dd($data->mainOrg);
//        dd($data->prOrg);
    }
}
