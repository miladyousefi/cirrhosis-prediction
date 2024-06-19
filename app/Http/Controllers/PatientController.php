<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(Request $request){
        $patients=Patient::where('user_id',auth()->user()->id);
        if($request->has('national_code')){
            $patients->where(['national_code'=>$request->national_code]);
        }
        $patients=$patients->orderBy('id','desc')->paginate(10);

        return view('user.user',compact('patients'));
    }
}
