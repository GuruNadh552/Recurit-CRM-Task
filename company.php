<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Company Website</title>
	 <script src="datatable/jquery.js"></script> 
     <script src="datatable/jquery.dataTables.min.js"></script> 
	 <link href="datatable/jquery.dataTables.min.css" rel="stylesheet">
	 <script>
     $(document).ready(function(){
	   $("#myTable").dataTable();
	 });
   
   </script>
</head>
<body>
	<div class="container-fluid bg-dark text-light">
		<nav class="navbar navbar-expand-lg  bg-dark text-light">
		  <a class="navbar-brand" href="#">Navbar</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link" href="#">List Companies</a>
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
	<div class="container mt-2">
		<?php if(isset($_GET['message'])) {echo '<div class="alert alert-success m-3" id="alert-message">'.$_GET['message'].'</div>';}; ?>
		<table id="myTable" class="table-responsive m-1" border="1">
				   <thead>
				   <tr>
                    <th>Company Name</th>
                    <th>Company Website</th>  
                    <th>Company Phone</th>  
                    <th>Company Address</th>  
                    <th>Company City</th>
                    <th>Company State</th>
                    <th>Company Country</th>
                    <th>Company Industry</th>
                    <th>Edit</th> 
                    <th>Delete</th> 
				   </tr>
				   </thead>
				   <tbody>
				    <?php
							include ('db.php');
							$email = $_SESSION['email'];
							$sql = 'SELECT * FROM add_company where addedBy="'.$email.'"';
							$result=mysqli_query($conn,$sql);
							while ($data = mysqli_fetch_array($result)) {
								$edit = "<button class='btn btn-warning'><a href='edit-company.php?id=".$data['id']."' class='text-dark'>Edit</a></button>";
								$delete = "<button class='btn btn-danger'><a href='delete.php?id=".$data['id']."' class='text-light'>Delete</a></button>";
							    echo '
                                    <tr>
                                        <td>' . $data['cname'] . '</td>
                                        <td>' . $data['cwebsite'] . '</td>
                                        <td>' . $data['cphone'] . '</td>
                                        <td>' . $data['address'] . '</td>
                                        <td>' . $data['ccity'] . '</td>
                                        <td>' . $data['cstate'] . '</td>
                                        <td>' . $data['ccountry'] . '</td>
                                        <td>' .$data['Industry']. '</td>
                                        <td>' .$edit.'</td>
                                        <td> '.$delete.'</td>
                                    </tr>
                                ';
								}
					?>
				   </tbody>
				   </table>
	</div>

<script type="text/javascript">
	function showIt2() {
  document.getElementById("alert-message").style.display = "none";
}
setTimeout("showIt2()", 5000);
</script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>