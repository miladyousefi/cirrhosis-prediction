<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminUserStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users=User::orderBy('id','desc')->paginate(10);
        return view('admin.user',compact('users'));
    }

    public function create(){
        return view('admin.user-form');
    }

    public function store(AdminUserStoreRequest $reuest){
        $data=$reuest->validated();
        $data['password']=Hash::make($data['password']);
        $user=User::create($data);
        if($user){
            return redirect()->route('admin.user')->with('success','با موفقیت ایجاد شد');
        }
        return redirect()->back()->with('error','مشکلی در ثبت پزشک به وجود آمده است');
        
    }
}