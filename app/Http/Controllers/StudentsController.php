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
    
}
