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
            'fullName'=>$request->fullName,
            'stNumber'=>$request->stNumber,
            'nationalCode'=>$request->nCode,
            'major'=>$request->major,
            'grade'=>$request->grade,
            'status'=>'wait'
        ]);
        return response()->json(['success'=>'Inquiry submitted successfully']);
    }
    public function index()
    {
        $degrees = degree::where('status' , 'wait')->get();
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
                $degree->status= 'free';
            }
           /* dd(array('data' => array(
                'status'=>$degree->status,
                'debt'=>$degree->debt,
            )));*/
            $degree->save();
            //todo
            //call Response ServiceTarget


            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'bpms.daniyalroomiyani.ir/api/getService',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array('data' => json_encode(array(
                    'status'=>$degree->status,
                    'debt'=>$degree->debt,
                )),
                    'success' => '1',
                    'message' => ' From dani'),

            ));
//            dd($curl->);
//            curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
            $response = curl_exec($curl);
//dd($response);
            curl_close($curl);

        }



        return redirect()->route('msrt.index');
    }
}
