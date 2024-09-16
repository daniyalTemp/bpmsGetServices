<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function getAddress(Request $request){
        $postalCode = $request->code;
        if($postalCode== "6814994611"){
            return response()->json([
                'address'=>'خرم آباد، خیابان رازی، کوی پاسداران،کوجچه معلم'
            ]);
        }
        if($postalCode== "123456789"){
            return response()->json([
                'address'=>'تهران، خیابان شریعتی،زیر پل سیدخندان سازمان فناوری اطلاعات ایران'
            ]);
        }
        if($postalCode== "987654321"){
            return response()->json([
                'address'=>'کرمانشاه،طاق بستان، دانشگاه رازی'
            ]);
        }
        return response()->json([400]);
    }

}
