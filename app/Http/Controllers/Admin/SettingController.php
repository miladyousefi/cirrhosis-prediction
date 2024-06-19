<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SettingRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function index(){
        return view('admin.setting');
    }
    public function update(SettingRequest $request){
        $request->validated();
        $admin=Admin::find(auth('admin')->user()->id);
        $admin->username=$request->username;
        $admin->first_name=$request->first_name;
        $admin->last_name=$request->last_name;
        if($request->has('password')){
            $admin->password=Hash::make($request->password);
        }
        $admin->save();
        return redirect()->back()->with('success','با موفقیت بروزرسانی شد');
    }
}
