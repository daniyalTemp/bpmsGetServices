<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessSendingSampleData;
use App\Jobs\SendMapDataJob;
use App\Models\LandAffairsSchedulingService;
use App\Models\Maps;
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
    public function SendMapData(Request $request)
    {
        $dataLists= Maps::all();
//        $dataLists[0]-
//        dd($dataLists);
//        ProcessSendingSampleData::dispatch($dataLists->name , $dataLists->org, $dataLists->uid);

//        dd($dataLists);
//        $curl = curl_init();
//
//        curl_setopt_array($curl, array(
//            CURLOPT_URL => 'https://pm.iraneland.ir/ws/call/getMapData',
//            CURLOPT_RETURNTRANSFER => true,
//            CURLOPT_ENCODING => '',
//            CURLOPT_MAXREDIRS => 10,
//            CURLOPT_SSL_VERIFYHOST => false,
//            CURLOPT_SSL_VERIFYPEER => false,
//            CURLOPT_TIMEOUT => 0,
//            CURLOPT_FOLLOWLOCATION => true,
//            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//            CURLOPT_CUSTOMREQUEST => 'POST',
//            CURLOPT_POSTFIELDS => '{
//    "mainOrg":"' . $dataLists[0]->mainOrg . '",
//    "prOrg":"' . $dataLists[0]->prOrg. '",
//    "mapData":"' . $dataLists[0]->mapData . '"
//
//}',
//            CURLOPT_HTTPHEADER => array(
//                'Content-Type: application/json',
//                'Authorization: Basic MzI0MjM3ODY0NDpBYmNAMTIzNDU2',
//            ),
//        ));
//
//        $response = curl_exec($curl);
//        dd($response);
//
//        curl_close($curl);

        foreach ($dataLists as $dataList) {
            SendMapDataJob::dispatch($dataList->mainOrg , $dataList->prOrg, $dataList->mapData);
        }
    }


}
