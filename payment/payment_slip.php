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

		<style type="text/css">
			#con{padding: 15px;
				margin: 160px 450px 160px;
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
<div class="col-md-12" style="height: 400px;">
        
			<h3 style="text-align: center;"><b>PAYMENT SLIP UPLOAD</b></h3>
			
			<form action="payment_slip_action.php" method="post" enctype="multipart/form-data">	
				<div class="card-Secondary">
					<div class="card bg-dark">
						<div class="card-body text-center">
							<?php
							$resid = $_GET["id"];
							?>

							<?php
							include_once("../includes/dbconnection.php");

							
							$Result=mysqli_Query($Connection,"SELECT * FROM applicant_details where nic='$resid'");
							while($row=mysqli_fetch_array($Result)){
							$respro = $row["subject_type"];

							}
							?>

								<div class="form-group">
									<div class="col-md-12">
										<label style="float: left;color: yellow;"><b>NIC</b></label>
								        <input type="text" class="form-control" value="<?php echo $resid;?>" disabled>
								    </div>
								</div>

            					<div class="form-group">
									<div class="col-md-12">
										<label style="float: left;color: yellow;"><b>Program ID</b></label>
								        <input type="text" class="form-control" value="<?php echo $respro;?>" disabled>
								    </div>
								</div>

								<input type="text" class="form-control" value="<?php echo $resid;?>" name="nic_num" hidden>
								<input type="text" class="form-control" value="<?php echo $respro;?>" name="pro_id" hidden>

								<!--lecture note upload-->
								<div class="form-group">
								<div class="col-md-12">
									<label style="float: left;color: yellow;"><b>Payment slip image</b></label>

								<div class="input-group">
        						<div class="custom-file">
            					<input type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon01" name="nic_path" required>
            					<label class="custom-file-label" for="inputGroupFile01">Select your payment slip</label>
        						</div>
								</div></div></div>

										
								
								

								<div class="p-2">
								<button type="submit" class="btn btn-success btn-sm" style="width: 140px; float: center;"><b>UPLOAD DATA</b></button>
			
								</div></div></div></div>
			</form>
</div>
</div>
</body>
</html>