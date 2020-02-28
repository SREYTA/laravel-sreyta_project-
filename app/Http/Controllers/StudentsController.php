<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
class StudentsController extends Controller
{
    public $students = ['Preab','Sovath','Reach','Rith','Kanha'];
    public function showStudent(){
        return view('pages.student') -> with('students', $this->students);
    }


    public function searchStudent($name){
        // loop to compare name with all student
        // foreach ($this->students as $student) {
        //     ($student == $name) ? $result = $name." is in the list":$result = $name." Not Found";
        // }

        // check is name foun will retrun found message
        $array = $name." Not Found";
        if(in_array($name, $this-> students)){
            $array = $name." is in the list";
        }
        return $array;
    }

    public function getStudent(){
        $students = Student::all();
        return view('pages.students',compact('students'));
    }

    public function formStudent(){
        return view('pages.studentForm');
    }
    public function insertStudent(Request $request){
        $request -> validate([
            'firstname' => 'required',
            'lastname' => 'required',
        ]);

        $student = new\App\Student;
        $student -> Firstname = $request -> get('firstname');
        $student -> Lastname = $request -> input('lastname');
        $student -> Age = $request -> age;
        $student -> save();
        return redirect('students');
    }
    public function updateStudent($id, Request $request){
        $student = Student::find($id);
        $student -> Firstname = $request -> firstname;
        $student -> Lastname = $request -> lastname;
        $student -> Age = $request -> age;
        $student -> save();
        return redirect('students');
    }
    public function showform($id){
        $student = Student::find($id);
        return view('pages.editform', compact('student'));
    }

    public function delete($id) {
        $student = Student::find($id);
        $student -> delete();
        return redirect('students');
    }

    
}
