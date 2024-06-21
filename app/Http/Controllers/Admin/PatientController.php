<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(){
        $patients=Patient::orderBy('id','desc')->paginate(10);
        return view('admin.patient',compact('patients'));
    }
}