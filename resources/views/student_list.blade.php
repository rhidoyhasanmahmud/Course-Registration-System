<!DOCTYPE html>
<html lang="en">
<head>
	<title>All Students List</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="table/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table/css/util.css">
	<link rel="stylesheet" type="text/css" href="table/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">

		<div class="container-table100">
			<div class="wrap-table100">
                <a href="{{url('course-registration-form')}}" style="background-color: #212529; border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;">
                    Student Registration Form</a>
                <a href="{{url('course-add-form')}}" style="background-color: #212529; border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;">
                    New Course Add Form</a>
				<div class="table100">

                    <br>
					<table>
						<thead>
							<tr class="table100-head">
								<th>ID</th>
								<th>Name</th>
								<th>Institute Name</th>
								<th>Department Name</th>
								<th>Address</th>
								<th>Gender</th>
								<th>Mobile Number</th>
								<th>Course Name</th>
								<th>Email ID</th>
							</tr>
						</thead>
						<tbody>
                        @foreach ($allStudents as $student)
								<tr>
									<td>{{$student->id}}</td>
									<td>{{$student->name}}</td>
									<td>{{$student->institute}}</td>
									<td>{{$student->department}}</td>
									<td>{{$student->address}}</td>
									<td>{{$student->gender}}</td>
									<td>{{$student->mobile_number}}</td>
									<td>{{$student->course}}</td>
									<td>{{$student->email}}</td>
								</tr>
                        @endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="table/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="table/vendor/bootstrap/js/popper.js"></script>
	<script src="table/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="table/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="table/js/main.js"></script>

</body>
</html>
