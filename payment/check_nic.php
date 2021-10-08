<!DOCTYPE html>
<html>
<head>
	<title>PAYMENT</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="css/index.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">

		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

		<style type="text/css">
			#con{padding: 100px;
				margin: 160px 300px 160px;
			}
			body{background-color: rgb(185, 194, 208);

			}
		</style>

</head>
<body>
	<div class="p-2">
	<button type="button" class="btn btn-info"><a href="../index.php" class="text-decoration-none" style="color: black;"><b>BACK TO HOMEPAGE</b></a></button>
	</div>


<div id="con">
<div class="col-md-12">
	<h3 style="text-align: center;"><b>NIC INPUT</b></h3>
	<div class="card-Secondary">
		<div class="card bg-dark">
			<div class="card-body text-center">
			
			<form method="post" enctype="multipart/form-data">	
				<div class="form-group">
					<div class="col-md-12">
						<input type="text" class="form-control" name="nicdata" placeholder="Enter your NIC to proceed.." style="text-align: center;" required>
					</div>
				</div>

					<div class="p-2">
						<button type="reset" class="btn btn-warning btn-sm" style="width: 110px; float: center;"><b>CLEAR</b></button>
						<button type="submit" class="btn btn-success btn-sm" style="width: 110px; float: center;"><b>PROCEED</b></button>
					</div>
			</form>
			</div></div></div></div>

<?php

include_once("../includes/dbconnection.php");
if(isset($_POST["nicdata"])){
$checknic = $_POST["nicdata"];

$Result=mysqli_Query($Connection,"SELECT * FROM applicant_details where nic='$checknic'");

$c = false;

while($row=mysqli_fetch_array($Result)){
	$c = true;
	//$ut=$row["nic"];
}

 // user found
 if ($c) {

 		$dat = $checknic;
			header("location: payment_slip.php?id=$dat");
			
          }
            else {
            	echo "<script type='text/javascript'>
                
				swal({ title: 'Opps!',text: 'Incorrect NIC number. It means your are not register. Check and try again!',icon: 'error'}).then(okay => {
				if (okay) {
    			window.location.href = 'check_nic.php';}
				});
    			</script>";
                //header('location: check_nic.php');
            }
}
?>

</body>
</html>