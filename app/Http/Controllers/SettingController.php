<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\SettingRequest;
use App\Http\Requests\SettingRequest as RequestsSettingRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function index(){
        $user=User::find(auth()->user()->id);
        return view('user.setting',compact('user'));
    }

    public function update(RequestsSettingRequest $requestsSettingRequest){
        $data=$requestsSettingRequest->validated();
        if($requestsSettingRequest->has('password')){
            $data['password']=Hash::make($requestsSettingRequest->password);
        }
        $user=User::find(auth()->user()->id);
        $user->update($data);
        return redirect()->back()->with('success','درخواست با موفقیت انجام شد');
        
    }
}
