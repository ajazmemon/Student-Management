<?php

namespace App\Http\Controllers;

use App\Marks;
use Illuminate\Http\Request;
use App\Http\Requests\MarkRequest;

class MarksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marks = Marks::all();
        return view('marks_list',  compact('marks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_marks');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MarkRequest $request)
    {
     
        $all = $request->all();
        Marks::create($all);
        return response()->json([
                    'status' => 'success',
                    'message' => 'Successfully Created',
                    
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Marks  $marks
     * @return \Illuminate\Http\Response
     */
    public function show(Marks $marks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Marks  $marks
     * @return \Illuminate\Http\Response
     */
    public function edit(Marks $marks,$id)
    {
        $data = Marks::find($id);
        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Marks  $marks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marks $marks,$id)
    {
        $update = Marks::find($id);
        $marks_update = $request->all();
        $update->maths = $marks_update['maths'];
        $update->science = $marks_update['science'];
        $update->english = $marks_update['english'];
        $update->save();
        return redirect('/marks');       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Marks  $marks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marks $marks,$id)
    {
        $mark = Marks::find($id);
        $mark->delete();
        return redirect('/marks');
    }
}
