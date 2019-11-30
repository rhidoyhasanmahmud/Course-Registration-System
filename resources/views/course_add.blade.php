<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="signup-form">
        <br>
        <a href="{{url('')}}"
           style="background-color: black; border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;">
            Student List</a>
        <a href="{{url('/course-list')}}"
           style="background-color: black; border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;">
            Courses List</a>
        <a href="{{url('course-registration-form')}}"
           style="background-color: black; border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;">
            Course Registration Form</a>

        <form action="{{url('new-course/submit')}}" method="POST" class="register-form" id="register-form">
            @csrf
            <h2>Add New Course</h2>
            @if(session('message'))
                <strong style="color: #270;background-color: #DFF2BF;">&#10004; {{session('message')}}</strong>
            @endif
            <div class="form-group">
                <label for="course_name">Course Name<sup style="color: red;">*</sup> :</label>
                <input type="text" name="course_name" id="course_name" placeholder="Enter New Course Name" required/>
            </div>

            <div class="form-submit">
                <input type="submit" value="Reset All" class="submit" name="reset" id="reset"/>
                <input type="submit" value="Submit Form" class="submit" name="submit" id="submit"/>
            </div>
        </form>
    </div>
</div>
<script src="jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
