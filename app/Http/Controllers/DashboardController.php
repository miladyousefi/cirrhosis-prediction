<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Models\Note;
use App\Models\Patient;
use App\Models\Request as ModelsRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=Auth::user();
        $patients_count=Patient::where(['user_id'=>auth()->user()->id])->count();
        $notes_count=Note::where(['user_id'=>auth()->user()->id])->count();
        $requests_count=ModelsRequest::count();
        $requests=ModelsRequest::where(['user_id'=>auth()->user()->id])->orderBy('id','desc')->paginate();
        return view('user.dashboard',compact('user','patients_count','notes_count','requests_count','requests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        $data=$request->validated();
        $data['user_id']=auth()->user()->id;
        $patient=Patient::create($data);
        if($patient){
            return redirect()->route('user')->with('success','کاربر با موفقیت ایجاد شد');

        }
        return redirect()->route('user')->with('error','مشکلی در روند ثبت درخواست به وجود آمده است');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}