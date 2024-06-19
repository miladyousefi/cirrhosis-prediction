<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestStoreRequest;
use App\Models\Patient;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class RequestController extends Controller
{
    
    public function index(Request $request)
    {
        
        if($request->has('patient_id')){
            $patient=Patient::findOrFail($request->patient_id);
            return view('user.request',compact('patient'));
        }
        return view('user.request');

    }
    public function store(RequestStoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id']=auth()->user()->id;

        try {
            if($request->has('phone') || $request->has('file_code')){
                $patient=Patient::where(['phone'=>$data['phone']])->orWhere(['file_code'=>$data['file_code']])->first();
                if($patient){
                    $data['patient_id']=$patient->id;
                }else{
                    $data['password']=Hash::make($request->phone);
                    $patient=Patient::create($data);
                    $data['patient_id']=$patient->id;
                }
            }
            $data['Grade 1 fatty'] = $data['grade1fatty'];
            $data['Grade 2 fatty'] = $data['grade2fatty'];
            $data['Grade 3 fatty'] = $data['grade3fatty'];
            $data['Cirrhosis peripheral symptoms'] = $data['cirrhosisSymptoms'];
            unset($data['grade1fatty']);
            unset($data['_token']);
            unset($data['grade2fatty']);
            unset($data['grade3fatty']);
            unset($data['cirrhosisSymptoms']);
            $data_pass[]=$data;
            $response = Http::post('http://127.0.0.1:5151/predict', $data_pass);
            if ($response->successful()) {
                $prediction = $response->json('prediction');
                if (is_array($prediction)) {
                    $prediction = $prediction[0]['prediction'] ?? 'Prediction not available';
                }

                return view('user.result', ['prediction' => $prediction]);
            } else {
                return view('user.result', ['prediction' => 'Prediction request failed']);
            }
        } catch (Exception $e) {
            // Display the exception message for debugging
            return view('user.result', ['prediction' => 'Error: ' . $e->getMessage()]);
        }
    }
}
