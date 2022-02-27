<?php
	session_start();
	$message="";
	if(isset($_SESSION['login']))
	{
		header("Location:company.php");
	}
	else if($_SERVER['REQUEST_METHOD']=='POST')
	{
		include_once"db.php";

		$uname = htmlspecialchars($_POST['email']);
		$pwd = md5(htmlspecialchars($_POST['password']));
		$qu = "SELECT * FROM registration WHERE email='$uname' and password='$pwd';";


		if(empty($_POST['email']) || empty($_POST['password']))
		{
			$message = "All fields are required!";	
		}	
		else if($row = mysqli_query($conn, $qu))
		{
			if($row->num_rows == 1)
			{
				$_SESSION['login'] = true;
				$_SESSION['email'] = $uname;
				header("Location: company.php");
			}
			else
			{
				$message = "Invalid email or password!";
			}
		}
		else
		{
			$message = "Something went wrong!";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/global.css">
</head>
<body>
<section class="container-fluid bg">
	<section class="row justify-content-center">
		<section class="col-12 col-sm-6 col-md3">
			<form class="form-container" action="index.php" method="post">
				<?php if(isset($_GET['message'])) {echo '<div class="alert alert-success" id="alert-message">'.$_GET['message'].'</div>';}; ?>
				<div class="card-header text-center">
				<h4><b>Login to your account</b></h4></div>
				<br>
				<?php
				  if($message !='')
				  {	
				?>	
					  <div class="form-group">
					    <h5 style="color:red"><?php echo $message ?> </h5>
					  </div><br>
				<?php 
				  }
				?>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter valid email">
			  </div><br>
	
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div></br>
			  <div>
			  	<button type="submit" class="btn btn-primary btn-lg btn-block w-100" value="Login">Login</button>
			  </div>
			  <a href="forget_pswd.html">forgot password</a>
			  <p>Don't have an account? <a href="register-main.php">Register here</a></p>
			</form>

		</section>
	</section>
	
</section>

<script type="text/javascript">
	function showIt2() {
  document.getElementById("alert-message").style.display = "none";
}
setTimeout("showIt2()", 3000);
</script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>