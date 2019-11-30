<?php

namespace App\Http\Controllers;

use App\CourseRegistrationForm;
use App\RegistrationForm;
use Illuminate\Http\Request;

class RegistrationFormController extends Controller
{

    public function index()
    {
        $allCourses = CourseRegistrationForm::all();
        return view('index', compact('allCourses'));
    }

    public function studentlist()
    {
        $allStudents = RegistrationForm::all();
        return view('student_list', compact('allStudents'));
    }


    public function store(Request $request)
    {
        $data = new RegistrationForm();
        $data->name = $request->name;
        $data->institute = $request->institute;
        $data->department = $request->department;
        $data->address = $request->address;
        $data->gender = $request->gender;
        $data->mobile_number = $request->mobile_number;
        $data->course = $request->course;
        $data->email = $request->email;
        $data->save();
        return back()->with('message', 'New Registration Member Added. Check out Student List');;
    }
}
