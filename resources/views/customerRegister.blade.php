<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Customer Registation Page</title>
	<link rel="icon" type="image/x-icon" href="https://www.saddlesandstyle.ie/wp-content/uploads/2018/06/home-new-ico-customer.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<style>
		body{
			font-family: "Sofia", sans-serif;
			font-size: 20px;

		}
		
		h1{
			text-transform: capitalize;
			

		}

		.form-font{
			font-size: 15px;

		}
	</style>
</head>
<body>
	<h1 class="font-effect-shadow-multiple text-danger"> customer register page.</h1>
	<hr class="text-danger">
	<form action="{{route('CustomerPostTest',[10,'Naing Lin Htun'])}}" method="post">
		 <!-- writing shortterm -->
		@csrf
		<div class="m-3 w-25 form-font text-danger">
			Name: <input type="text" name="userName" class="form-control" required>
			Age: <input type="number" name="userAge" class="form-control" required>

			Address: <input type="text" name="userAddress" class="form-control" required><br>
			Gender:
			<br>
			<select name="userGender" class="form-control w-25">
				<option value="M">Male</option>
				<option value="F">Female</option>
			</select><br>
			<input type="submit" value="Save" class="btn btn-success">
		</div>
		
			
	</form>
		
</body>
</html>