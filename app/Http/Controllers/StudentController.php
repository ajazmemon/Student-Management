<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('student');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(StudentRequest $request) {
        $all = $request->all();
        $file = Input::file('image');
        if (Input::hasFile('image')) {
            $fileName = time() . '.' . request()->image->getClientOriginalExtension();
            $file->move('img/', $fileName);
            $all['image'] = $fileName;
        }

        $student = Student::create($all);

        \App\Marks::create([
            's_roll_no' => $student->roll_no
        ]);

        return redirect('/students_list');
    }

    public function students_list() {
        $students = Student::all();
        return view('student_list', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student, $id) {
        $students_edit = Student::findOrFail($id);
        return view('student', ['students_edit' => $students_edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, Student $student, $id) {
        $student_update = Student::find($id);

        $all = $request->all();


        if (empty($all->image)) {
            $all['image'] = $student_update->image;
        }

        $file = Input::file('image');
        if (Input::hasFile('image')) {
            $fileName = time() . '.' . request()->image->getClientOriginalExtension();
            $oldFilelogo = public_path('img') . $student_update->image;
            if (is_file($oldFilelogo)) {
                unlink($oldFilelogo);
            }
            $file->move('img/', $fileName);
            $all['image'] = $fileName;
        } else {
            $fileName = $student_update->image;
        }


        $student_update->roll_no = $all['roll_no'];
        $student_update->first_name = $all['first_name'];
        $student_update->last_name = $all['last_name'];
        $student_update->dob = $all['dob'];
        $student_update->gender = $all['gender'];
        $student_update->class = $all['class'];
        $student_update->image = $all['image'];
        $student_update->save();

        return redirect('/students_list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student,$id) {
        $student = Student::find($id);
        $student->delete();
        return redirect('/students_list');
    }

}
