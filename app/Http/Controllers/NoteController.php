<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes=Note::where('user_id',auth()->user()->id)->paginate(10);
        return view('user.note',compact('notes'));
    }

    public function store(NoteRequest $request)
    {
        $data=$request->validated();
        $data['user_id']=auth()->user()->id;
        $note=Note::create($data);
        return redirect()->back()->with('success','با موفقیت یاداشت ایجاد شد');
    }
}
