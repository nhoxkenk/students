<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //

    public function get_all_student(){
        $students = Student::all();

        return view('student_manage', ['students' => $students]);
    }

    public function show(){
        return view('student_add');
    }

    public function add(Request $request){
        Student::create([
            'fullname' => $request->name,
            'birthday' => $request->birth,
            'address' => $request->add,
        ]);

        return redirect('student');
    }
    
    public function get_student_by_id($id){
        $student = Student::find($id);

        return view('student_edit', ['student' => $student]);
    }

    public function edit(Request $request, $id){
        $student = Student::find($id);

        $student->update([
            'id' => $id,
            'fullname' => $request->name,
            'birthday' => $request->birth,
            'address' => $request->add,
        ]);

        return redirect('student');
    }

}
