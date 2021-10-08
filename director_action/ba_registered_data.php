
<html>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="css/programe.css" type="text/css" rel="stylesheet">
        <link href="css/index.css" rel="stylesheet" type="text/css" media="all" />
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>

<?php

include_once("../includes/dbconnection.php");

?>

<div class="card h-100" style="background-color: rgb(27, 29, 69 );">
			<div class="container">
				<div class="p-2"><h3 style="text-align: center; font-size: xx-large;color: white;"></h3></div>
							
<!--AVAILABLE CERTIFICATE COURSES php code -->
				


<div class="p-2">
	<h3 style="text-align: center; font-size: xx-large;color: white;">REGISTERED STUDENT'S INFORMATION</h3>
					<div class="accordion " id="accordionExample">
				  
						<div class="card">
						<div class="card bg-secondary text-white">
						  <div class="card-header" id="headingOne">
						  	<h5 style="text-align: center;"><b>EXRENAL DEGREE PROGRAMMES</b></h5><br>
							<h2 class="mb-1">
							<button class="btn btn-outline-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="width: 800px;"><b>Bachelor of Business Management - BA_BUM</b></button>
							</h2>
						  </div>
						
						  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
							<div class="card-body">
							 
				  
								<!--CERTIFICATE COURSES php code -->
								<?php

                $Result = mysqli_query($Connection,"SELECT * FROM payment WHERE program_id='BA_BUM'");
                
                echo ("<table border='1'>");

				echo ("<tr>");
				echo ("<th>Initial Nname</th>");
		        echo ("<th>NIC</th>");
		        echo ("<th>User Name</th>");
               
                echo ("<th>Programe Id</th>");
				echo ("<th>Full Payment</th>");
				echo ("<th>Paied Payment</th>");
				echo ("<th>Rest Payment</th>");

				
                
				echo ("</tr>");

				

				while($row=mysqli_fetch_array($Result)){

				echo "<tr>";
				    echo "<td>".$row['initial_name']."</td>";
					echo "<td>".$row['nic']."</td>";
					echo "<td>".$row['user_name']."</td>";
                    echo "<td>".$row['program_id']."</td>";
                    echo "<td>".$row['full_payment']."</td>";
					echo "<td>".$row['current_payment']."</td>";
					echo "<td>".$row['rest_payment']."</td>";
                echo "</tr>";
                }
                
                echo "<br>";
                
                echo ("</table>");
                ?>
<!--Certificate Course in Agri-Business Management end -->
				  
				  				</div>
							</div>
						  </div>
						</div>

						<div class="card">
							<div class="card bg-secondary text-white">
							  <div class="card-header" id="headingTwo">
								<h2 class="mb-1">
								  <button class="btn btn-outline-dark" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="width: 800px;"><b> Bachelor of Information Technology - BA_INT</b></button>
								</h2>
								</div>
				  
							  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
								<div class="card-body">
								  
				  
								<!--SPECIAL COURSES ON DEMAND php code -->
								<!--AVAILABLE CERTIFICATE COURSES php code -->
<?php

                $Result = mysqli_query($Connection,"SELECT * FROM payment WHERE program_id='BA_INT'");
                
                echo ("<table border='1'>");

				echo ("<tr>");
				echo ("<th>Initial Nname</th>");
		        echo ("<th>NIC</th>");
		        echo ("<th>User Name</th>");
               
                echo ("<th>Programe Id</th>");
				echo ("<th>Full Payment</th>");
				echo ("<th>Paied Payment</th>");
				echo ("<th>Rest Payment</th>");

				
                
				echo ("</tr>");

				

				while($row=mysqli_fetch_array($Result)){

				echo "<tr>";
				    echo "<td>".$row['initial_name']."</td>";
					echo "<td>".$row['nic']."</td>";
					echo "<td>".$row['user_name']."</td>";
                    echo "<td>".$row['program_id']."</td>";
                    echo "<td>".$row['full_payment']."</td>";
					echo "<td>".$row['current_payment']."</td>";
					echo "<td>".$row['rest_payment']."</td>";
                echo "</tr>";
                }
                
                echo "<br>";
                
                echo ("</table>");
                ?>
<!--Certificate Course in Agri-Business Management end -->

							  		</div>
								</div>
							  </div>
							</div>
				  
						  <div class="card">
						  <div class="card bg-secondary text-white">
							<div class="card-header" id="headingThree">
							  <h2 class="mb-1">
							  <button class="btn btn-outline-dark" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="width: 800px;"><b>Bachelor of Science in Agricultural Science - BA_SAS</b></button>
							  </h2>
							</div>
				  
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							  <div class="card-body">
								
				  
								<!--DIPLOMAS php code-->
								<!--AVAILABLE CERTIFICATE COURSES php code -->
<?php

                $Result = mysqli_query($Connection,"SELECT * FROM payment WHERE program_id='BA_SAS'");
                
                echo ("<table border='1'>");

				echo ("<tr>");
				echo ("<th>Initial Nname</th>");
		        echo ("<th>NIC</th>");
		        echo ("<th>User Name</th>");
               
                echo ("<th>Programe Id</th>");
				echo ("<th>Full Payment</th>");
				echo ("<th>Paied Payment</th>");
				echo ("<th>Rest Payment</th>");

				
                
				echo ("</tr>");

				

				while($row=mysqli_fetch_array($Result)){

				echo "<tr>";
				    echo "<td>".$row['initial_name']."</td>";
					echo "<td>".$row['nic']."</td>";
					echo "<td>".$row['user_name']."</td>";
                    echo "<td>".$row['program_id']."</td>";
                    echo "<td>".$row['full_payment']."</td>";
					echo "<td>".$row['current_payment']."</td>";
					echo "<td>".$row['rest_payment']."</td>";
                echo "</tr>";
                }
                
                echo "<br>";
                
                echo ("</table>");
                ?>
<!--Certificate Course in Agri-Business Management end -->

	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
  	</div>
    </div>

</body>
</html>