<?php

	include_once 'db.php';

	$id = $_GET['id'];

	$sql = "SELECT * FROM add_company WHERE id='$id'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_row($result);		
	// $data = $sql->fetch_array();

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Company Website</title>
</head>
<body>
	<div class="container-fluid bg-dark text-light">
		<nav class="navbar navbar-expand-lg  bg-dark text-light">
		  <a class="navbar-brand" href="#">navbar</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link" href="company.php">List Companies</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="add_company.html">Add Company</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="logout.php">Logout</a>
		      </li>
		    </ul>
		  </div>
		</nav>
	</div>
	<div class="container">
		<div class="card mt-2">
			<div class="card-title bg-primary text-light">
				<h5 class="text-center m-2">EDIT COMPANY</h5>
			</div>
			<div class="card-body">
				<?php echo '<form action="edit_company.php?id='.$id.'" method="post">' ?>
					<div class="form-group">
						<label>Company Name</label>
						<input type="name" name="cname" class="form-control" <?php echo 'value="'.$row[1].'"' ?> ></div>
					<div class="form-group">
						<label>Company Website</label>
						<input type="name" name="cwebsite" class="form-control" <?php echo 'value="'.$row[2].'"' ?> >
					</div>
					<div class="form-group">
						<label>Company Phone Number</label>
						<input type="phone" name="cphone" class="form-control" <?php echo 'value="'.$row[3].'"' ?> >
					</div>
					<div class="form-group">
						<label>Company Address</label>
						<textarea cols="2" rows="3" class="form-control text-left" name="address"><?php echo $row[4];?></textarea>
					</div>
					<div class="row">
						<div class="col">
							<div class="form-group">
								<label>Company City</label>
								<input type="text" name="ccity" class="form-control" <?php echo 'value="'.$row[5].'"' ?> >
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label>Company state</label>
								<input type="text" name="cstate" class="form-control" <?php echo 'value="'.$row[6].'"' ?> >
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label>Company Country</label>
								<input type="text" name="ccountry" class="form-control" <?php echo 'value="'.$row[7].'"' ?> >
							</div>
						</div>
					</div>
					<select class="form-control" aria-label="Default select example" name="Industry">
					  <option>Select Industry</option>
					  <option value="account" <?php if($row[8]=='account')echo "selected";?>>Account</option>
					  <option value="it" <?php if($row[8]=='it')echo "selected";?>>IT</option>
					  <option value="sales" <?php if($row[8]=='sales')echo "selected";?>>Sales</option>
					  <option value="health" <?php if($row[8]=='Health')echo "selected";?>>Health Care</option>
					</select>
			</div>
			<div class="card-footer">
				<button class="btn btn-primary" type="submit">UPDATE COMPANY</button>
			</div>
			
		</form>
		</div>
	</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>