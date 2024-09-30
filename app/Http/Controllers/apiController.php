<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessSendingSampleData;
use App\Models\LandAffairsSchedulingService;
use App\Models\sampleData;
use App\Models\Services;
 use Illuminate\Http\Request;

class apiController extends Controller
{
    public function getService(Request $request)
    {
        Services::create([
            'data' => $request->data,
            'success' => $request->success,
            'message' => $request->message
        ]);
        return response()->json([
            'msg' => 'داده ها دریافت شد'
        ]);

    }

    public function showServices()
    {
        $data = Services::all();
        return response()->json($data);
    }

    public function SendData(Request $request)
    {
        $dataLists= sampleData::all();
//        ProcessSendingSampleData::dispatch($dataLists->name , $dataLists->org, $dataLists->uid);

//        dd($dataLists);
        foreach ($dataLists as $dataList) {
//            ProcessSendingSampleData::dispatch($dataList->name , $dataList->org, $dataList->uid);
        }

    }


}
