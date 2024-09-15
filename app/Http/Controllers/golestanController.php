<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class golestanController extends Controller
{
    public function getStudentData(Request $request , $id)
    {

        if ($id == "9711415031")
            return response() ->json([
                "success"=>false,
                "data"=>([

                    "fullName"=>"دانیال رومیانی",
                    "grade"=>"کارشناسی",
                    "GPA"=>"15.6",
                    "passedUnitsCount"=>"140",
                ])
            ]);
        if ($id == "4012334008")
            return response() ->json([
                "success"=>false,
                "data"=>([

                    "fullName" => "دانیال رومیانی",
                    "grade" => "کارشناسی ارشد",
                    "GPA" => "18.6",
                    "passedUnitsCount" => "138",

                ])
            ]);
        if ($id == "4012334007")
            return response()->json([
                "success"=>false,
                "data"=>([

                    "fullName" => "دانیال رومیانی",
                    "grade" => "کارشناسی ارشد",
                    "GPA" => "18.6",
                    "passedUnitsCount" => "138",

                ])
            ]);
        return response()->json([
            "success"=>false,
            "msg"=>"اطلاعات دانشجو یافت نشد"
        ] );

     }
}
