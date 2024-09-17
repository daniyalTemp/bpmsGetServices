<?php

namespace App\Http\Controllers;

use App\Models\degree;
use Illuminate\Http\Request;

class msrtController extends Controller
{


    public function getInquiry(Request $request)
    {
//        dd(request()->all());

        degree::create([
            'fullName' => $request->fullName,
            'stNumber' => $request->stNumber,
            'nationalCode' => $request->nCode,
            'major' => $request->major,
            'grade' => $request->grade,
            'tracking' => $request->tracking,
            'status' => 'wait'
        ]);
        return response()->json(['success' => 'Inquiry submitted successfully']);
    }

    public function index()
    {
        $degrees = degree::where('status', 'wait')->get();
        return view('msrt.index', compact('degrees'));
    }

    public function all(Request $request)
    {
        $degrees = degree::all();
        return view('msrt.all', compact('degrees'));

    }

    public function changestatus(Request $request, int $id)
    {


//        dd($request->all());

        $degree = degree::find($id);
        if ($request->has('status')) {
            if ($request->get('status') == 'debt') {
                $degree->debt = $request->debt;
                $degree->status = 'debt';
            } elseif ($request->get('status') == 'free') {
                $degree->status = 'free';
            }
            /* dd(array('data' => array(
                 'status'=>$degree->status,
                 'debt'=>$degree->debt,
             )));*/
            $degree->save();


            //send to Caller
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://es.razi.ac.ir/ws/call/test',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_SSL_VERIFYHOST => false,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => '{
                                            "data":    {
                                            "status":"'.$degree->status.'",
                                            "debt":"'.$degree->debt.'"
                                            } ,
                                            "tracking":"'.$degree->tracking.'",
                                            "message":"From Daniyal"
                                            }',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Authorization: Basic MzI0MjM3ODY0NTpBYmNAMTIzNDU2',
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
//            dd($response);

        }


        return redirect()->route('msrt.index');
    }
}
