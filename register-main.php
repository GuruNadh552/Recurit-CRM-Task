<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/global.css">
</head>
<body>
<section class="container-fluid bg">
	<section>
		<form class="form-container1" action="register.php" method="post">
			<?php if(isset($_GET['message'])) {echo '<div class="alert alert-success m-3" id="alert-message">'.$_GET['message'].'</div>';}; ?>
			<div><h3><b>Registration Form</b></h3></div>
			<div>
				<label for="exampleInputName">First Name</label>
			    <input type="text" class="form-control" id="firstName" placeholder="Enter firstname" name="firstName">
			</div>
			<div>
				<label for="exampleInputName">Last Name</label>
			    <input type="text" class="form-control" id="lastName" placeholder="Enter lastname" name="lastName">
			</div>
			<div class="form-group">
				<label for="email">Gender</label>
				<div>
					<label for="male" class="radio-inline"><input type="radio" name="gender" id="male" value="m">Male</label>
					<label for="female" class="radio-inline"><input type="radio" name="gender" id="female" value="f">Female</label>
					<label for="other" class="radio-inline"><input type="radio" name="gender" id="other" value="o">Others</label>
				</div>
			</div>
			<div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
			</div>
			<div class="form-group">
			   <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" id="password" placeholder="Password" name="Password">
			</div>
			<div class="form-group">
			   <label for="exampleInputPhone">Phone number</label>
			    <input type="phone-number" class="form-control" id="phone" name="phone">
			</div><br>
			<div>
			  	<button type="submit" class="btn btn-primary btn-lg btn-block w-100" type="submit">Register</button>
			</div>
		</form>
	</section>
	
</section>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>