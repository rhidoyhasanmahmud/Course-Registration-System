<?php

namespace App\Http\Controllers;

use App\CourseRegistrationForm;
use Illuminate\Http\Request;

class CourseRegistrationFormController extends Controller
{

    public function index()
    {
        return view('course_add');
    }

    public function courselist()
    {
        $allCourses = CourseRegistrationForm::all();
        return view('course_list', compact('allCourses'));
    }


    public function store(Request $request)
    {
        $data = new CourseRegistrationForm();
        $data->course_name = $request->course_name;
        $data->save();
        return back()->with('message', 'New Course Added. Check out Course List');
    }

}
