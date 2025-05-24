<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title> </title>
	<!--Bootstrap css link-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-dark">
	<h1 class="text-center text-info p-3"> </h1>
		<div class="bg-info py-4">
			<h2 class="text-center">Registration Account</h2>
				<div class="container text-center">
					<form action="../actions/register.php" method="POST" enctype="multipart/form-data">
						<div class="mb-3">
							<input type="text" class="form-control w-50 m-auto" placeholder="Enter your Name" required="required" name="name">
						</div>
						<div class="mb-3">
							<input type="text" class="form-control w-50 m-auto" placeholder="Enter your Mobile No." required="required" name="mobile" maxLength="10" minLength="10">
						</div>
						<div class="mb-3">
							<input type="text" class="form-control w-50 m-auto" placeholder="Enter your Username" required="required" name="username">
						</div>
						<div class="mb-3">
							<input type="password" class="form-control w-50 m-auto" placeholder="Enter your Password" required="required" name="password">
						</div>
						<div class="mb-3">
							<input type="password" class="form-control w-50 m-auto" placeholder="Confirm Password" required="required" name="cpassword">
						</div>
					  
						<div class="mb-3">
							<select name="std" class="form-control w-50 m-auto">
								<option value="group">Student</option>
								<option value="voter">Employee</option>
								<option value="voter">Teacher</option>
							</select>
						</div>
						<button type="submit" class="btn btn-dark my-4">Register</button>
						<p>Already have an account?<a href="../"class="text-white">Login here</a></p>
					</form>
				</div>
			</div>
</body>
</html>