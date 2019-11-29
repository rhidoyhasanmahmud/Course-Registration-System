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

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/course_registration.png" alt="course registration">
                </div>
                <div class="signup-form">
                    <br>
                    <a href="{{url('')}}" style="background-color: rosybrown; border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;">
                        Go To Student Registration List</a>
                    <form action="{{url('new-course/submit')}}" method="POST" class="register-form" id="register-form">
                        @csrf
                        <h2>New Course Add Form</h2>
                        <div class="form-group">
                                <label for="course_name">Course Name<sup style="color: red;">*</sup> :</label>
                                <input type="text" name="course_name" id="course_name" required/>
                        </div>

                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
