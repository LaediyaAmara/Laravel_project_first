<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StundentController extends Controller
{
    function index()
    {
        $students = Student::all(); // select * from studnets

        return $students;
    }


    // show student
    function show($nis)
    {

        $student = Student::where('nis', $nis)->get();
        return $student;
    }
    //create student
    function create(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'name' => ['required'],
            'nis' => ['required', 'numeric'],
            'grade' => ['required'],
            'gender' => ['required'],
            'age' => ['required','numeric'],

        ]);

        //save db 
        $student = Student::create($validated);
     
     
        return $student;    
    }
    // update student
    function update(Request $request,$id) 
{
    //validasi
    $validated = $request->validate([
        'name' => ['required'],
        'nis' => ['required', 'numeric'],
        'grade' => ['required'],
        'gender' => ['required'],
        'age' => ['required','numeric'],

    ]);

    
        $student = Student::find($id);
        $student->update($validated);
        
        $student->save();
        
        return $student;
        
   
   
   //destroy student
    function destroy($id) 
    {
        $student = Student::find($id);
        $student->delete();

        return $student;
    }
}
}