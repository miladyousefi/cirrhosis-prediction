<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestStoreRequest;
use App\Models\Patient;
use App\Models\Request as ModelsRequest;
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
        $data = $request->all();
        $data['user_id']=auth()->user()->id;
        try {
            $patient=Patient::where(['phone'=>$data['phone']])->first();
            if($patient){
                $data['patient_id']=$patient->id;
            }else{
                $data['password']=Hash::make($request->phone);
                $patient=Patient::create($data);
                $data['patient_id']=$patient->id;
            }
            $data_pass = [];
            foreach ($data as $key => $value) {
                $newKey = str_replace('_', ' ', $key);
                if($value=="0" || $value=="1"){
                    $data_pass[$newKey] = (int) $value;

                }else{
                    $data_pass[$newKey] = (float)$value;

                }
            }
            $data_pass['URIC_ACID']=$data_pass['URIC ACID'];
            $response = Http::post('http://127.0.0.1:5151/predict', $data_pass);
            if ($response->successful()) {
                $prediction = $response->json('prediction');
                if (is_array($prediction)) {
                    $prediction = $prediction[0]['prediction'] ?? 'Prediction not available';
                }
                if($prediction==1){
                    $data['result']=$prediction;
                    $req=ModelsRequest::create($data);
                }
                return view('user.result', ['prediction' => $prediction]);
            } else {
                return view('user.result', ['prediction' => 'Prediction request failed']);
            }
        } catch (Exception $e) {
            return view('user.result', ['prediction' => 'Error: ' . $e->getMessage()]);
        }
    }
}
