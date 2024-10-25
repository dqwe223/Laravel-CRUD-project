<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Facades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    public function create(){
        return view('student.create');
    }

    public function store(Request $request)
    {

        $rules = [
            'item_name' => 'required|string',
            'price' => 'required|string',
        ];

        $validator = Validator::make($request->all(), $rules,$messages = [
            'item_name.required' => 'Please Enter the Item Name',
            'price.required' =>'Please Enter the Price',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $student = new Student();
        $student->item_name = $request->item_name;
        $student->item_dis = $request->item_dis;
        $student->item_c = $request->item_c;
        $student->price = $request->price;
        $student->stat = $request->stat;
        $student->save();

        return redirect()->route('student.index');
    }

    public function edit($id){
        $student = Student::where('id',$id)->first();
        return view('student.edit',compact('student'));
    }

    public function update(Request $request, $student_id)
    {
        $rules = [
            'item_name' => 'required|string',
            'price' => 'required|string',
        ];

        $validator = Validator::make($request->all(), $rules,$messages = [
            'item_name.required' => 'Please Enter the Item Name',
            'price.required' =>'Please Enter the Price',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $student = Student::where('id',$student_id)->first();

        $student->item_name = $request->item_name;
        $student->item_dis = $request->item_dis;
        $student->item_c = $request->item_c;
        $student->price = $request->price;
        $student->stat = $request->stat;

        $student->save();

        return redirect()->route('student.index');
    }

    public function delete($student_id){
        Student::where('id',$student_id)->delete();
        return redirect()->route('student.index');
    }
}
