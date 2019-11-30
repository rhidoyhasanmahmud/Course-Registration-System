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
        <a href="{{url('/')}}"
           style="background-color: black; border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;">
            Student List</a>
        <a href="{{url('/course-list')}}"
           style="background-color: black; border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;">
            Courses List</a>
        <a href="{{url('course-add-form')}}"
           style="background-color: #212529; border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;">
            New Course Add </a>
        <form action="{{url('form/submit')}}" method="POST" class="register-form" id="register-form">
            @csrf
            <h2>Course Registration Form</h2>
            @if(session('message'))
                <strong class="fa-check" style="color: #270;background-color: #DFF2BF;">&#10004;{{session('message')}}</strong>
            @endif
            <div class="form-row">
                <div class="form-group">
                    <label for="name">Name<sup style="color: red;">*</sup> :</label>
                    <input type="text" name="name" id="name" placeholder="Enter Your Name" required/>
                </div>
                <div class="form-group">
                    <label for="institute">Institute Name<sup style="color: red;">*</sup> :</label>
                    <input type="text" name="institute" id="institute" placeholder="Enter Your Institute Name"
                           required/>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="department">Department Name<sup style="color: red;">*</sup> :</label>
                    <input type="text" name="department" placeholder="Enter Your Department Name" id="department"
                           required/>
                </div>
                <div class="form-group">
                    <label for="address">Address<sup style="color: red;">*</sup> :</label>
                    <input type="text" name="address" id="address" placeholder="Enter Your Address" required/>
                </div>
            </div>

            <div class="form-radio">
                <label for="gender" class="radio-label">Gender<sup style="color: red;">*</sup> :</label>
                <div class="form-radio-item">
                    <input type="radio" name="gender" id="male" value="Male" checked>
                    <label for="male">Male</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="gender" id="female" value="Female">
                    <label for="female">Female</label>
                    <span class="check"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="course">Course<sup style="color: red;">*</sup> :</label>
                <div class="form-select">
                    <select name="course" id="course" required>
                        <option>Select Course</option>
                        @foreach ($allCourses as $course)
                            <option value='{{$course->course_name}}'>{{$course->course_name}}</option>
                        @endforeach
                    </select>
                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="mobile_number">Mobile Number <sup style="color: red;">*</sup>:</label>
                    <input type="text" name="mobile_number" placeholder="Enter your Mobile Number" id="mobile_number"
                           required>
                </div>
                <div class="form-group">
                    <label for="email">Email ID <sup style="color: red;">*</sup>:</label>
                    <input type="email" name="email" placeholder="Enter your Email" id="email" required/>
                </div>
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
