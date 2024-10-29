<?php

namespace App\Http\Controllers;

use App\Imports\MapsImportClass;
use App\Models\MapData;
use App\Models\Maps;
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

//        $file = \Illuminate\Support\Facades\File::get(public_path('mapsSapmle.xlsx'));
        dd(Maps::all()[12]);
//        Excel::import(new MapsImportClass(), public_path('mapsSapmle.xlsx'));

    }
}
