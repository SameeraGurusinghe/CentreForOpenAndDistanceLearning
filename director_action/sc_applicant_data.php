<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        #cocode{background-color: rgb(192,192,192);

        }
    </style>
</head>

<body>

<?php
    include_once("../includes/dbconnection.php");
    ?>

<div class="card h-100" style="background-color: rgb(27, 29, 69 );">
			<div class="container">
				<div class="p-2"><h3 style="text-align: center; font-size: xx-large;color: white;">APPLICANT'S INFORMATION</h3></div>
							

    <div class="card" id="cocode">
		<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-toggle="collapse" data-parent="#accordionExample">
			<div class="card-body">
				<h5 style="text-align: center;"><b>SPECIAL COURSES ON DEMAND</b></h5>
					  
<!--100 hours short course on Agriculture and Bio System start-->
                <?php
                $Result = mysqli_query($Connection,"SELECT * FROM applicant_details WHERE subject_type='SC_ABS'");
                
                echo ("<table border='1'>");

	            echo ("<tr>");
		        echo ("<th>NIC</th>");
		        echo ("<th>subject_name</th>");
                echo ("<th>initial_name</th>");
                echo ("<th>gender</th>");
                echo ("<th>contact_number</th>");
                echo "<th><a href='sc_more_applicant_data/sc_abs.php' target='blankpage'>more details</a></th>";
	            echo ("</tr>");

				while($row=mysqli_fetch_array($Result)){

                echo "<tr>";
                    echo "<td>".$row['nic']."</td>";
                    echo "<td>".$row['subject_name']."</td>";
                    echo "<td>".$row['initial_name']."</td>";
                    echo "<td>".$row['gender']."</td>";
                    echo "<td>".$row['contact_number']."</td>";
                echo "</tr>";
                }
                
                echo "<br>";
                
                echo ("</table>");
                ?>
<!--100 hours short course on Agriculture and Bio System -->

<!--Certificate in History for School Teachers start-->
                <?php
                $Result = mysqli_query($Connection,"SELECT * FROM applicant_details WHERE subject_type='SC_HST'");
                
                echo ("<table border='1'>");

	            echo ("<tr>");
		        echo ("<th>NIC</th>");
		        echo ("<th>subject_name</th>");
                echo ("<th>initial_name</th>");
                echo ("<th>gender</th>");
                echo ("<th>contact_number</th>");
                echo "<th><a href='sc_more_applicant_data/sc_hst.php' target='blankpage'>more details</a></th>";
	            echo ("</tr>");

				while($row=mysqli_fetch_array($Result)){

                echo "<tr>";
                    echo "<td>".$row['nic']."</td>";
                    echo "<td>".$row['subject_name']."</td>";
                    echo "<td>".$row['initial_name']."</td>";
                    echo "<td>".$row['gender']."</td>";
                    echo "<td>".$row['contact_number']."</td>";
                echo "</tr>";
                }
                
                echo "<br>";
                
                echo ("</table>");
                ?>
<!--Certificate in History for School Teachers end -->

<!--Teacher Training programme in Science and Technology Grade 6-11 start-->
                <?php
                $Result = mysqli_query($Connection,"SELECT * FROM applicant_details WHERE subject_type='SC_STG'");
                
                echo ("<table border='1'>");

	            echo ("<tr>");
		        echo ("<th>NIC</th>");
		        echo ("<th>subject_name</th>");
                echo ("<th>initial_name</th>");
                echo ("<th>gender</th>");
                echo ("<th>contact_number</th>");
                echo "<th><a href='sc_more_applicant_data/sc_stg.php' target='blankpage'>more details</a></th>";
	            echo ("</tr>");

				while($row=mysqli_fetch_array($Result)){

                echo "<tr>";
                    echo "<td>".$row['nic']."</td>";
                    echo "<td>".$row['subject_name']."</td>";
                    echo "<td>".$row['initial_name']."</td>";
                    echo "<td>".$row['gender']."</td>";
                    echo "<td>".$row['contact_number']."</td>";
                echo "</tr>";
                }
                
                echo "<br>";
                
                echo ("</table>");
                ?>
<!--Teacher Training programme in Science and Technology Grade 6-11 end -->

            </div>
        </div>


<!-- php end here-->

	</div>
	</div>
	</div>
	</div>
    </div>

</body>
</html>