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
                <h5 style="text-align: center;"><b>CERTIFICATE COURSES</b></h5>
                

<!--Certificate Course in Agri-Business Management start-->
                <?php
                $Result = mysqli_query($Connection,"SELECT * FROM applicant_details WHERE subject_type='CC_ABM'");
                
                echo ("<table border='1'>");

	            echo ("<tr>");
		        echo ("<th>NIC</th>");
		        echo ("<th>subject_name</th>");
                echo ("<th>initial_name</th>");
                echo ("<th>gender</th>");
                echo ("<th>contact_number</th>");
                echo "<th><a href='cc_more_applicant_data/cc_abm.php' target='blankpage'>more details</a></th>";
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
<!--Certificate Course in Agri-Business Management end -->

<!--Certificate Course in English for Junior Executives start-->
<?php
                $Result = mysqli_query($Connection,"SELECT * FROM applicant_details WHERE subject_type='CC_EJE'");
                
                echo ("<table border='1'>");

	            echo ("<tr>");
		        echo ("<th>NIC</th>");
		        echo ("<th>subject_name</th>");
                echo ("<th>initial_name</th>");
                echo ("<th>gender</th>");
                echo ("<th>contact_number</th>");
                echo "<th><a href='cc_more_applicant_data/cc_eje.php' target='blankpage'>more details</a></th>";
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
<!--Certificate Course in English for Junior Executives end -->

<!--Certificate Course in English for School Leavers start-->
<?php
                $Result = mysqli_query($Connection,"SELECT * FROM applicant_details WHERE subject_type='CC_ESL'");
                
                echo ("<table border='1'>");

	            echo ("<tr>");
		        echo ("<th>NIC</th>");
		        echo ("<th>subject_name</th>");
                echo ("<th>initial_name</th>");
                echo ("<th>gender</th>");
                echo ("<th>contact_number</th>");
                echo "<th><a href='cc_more_applicant_data/cc_esl.php' target='blankpage'>more details</a></th>";
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
<!--Certificate Course in English for School Leavers end -->

					  
<!--Certificate Course in Java Application Development satrt-->
				<?php
                $Result = mysqli_query($Connection,"SELECT * FROM applicant_details WHERE subject_type='CC_JAD'");
                
                echo ("<table border='1'>");

	            echo ("<tr>");
		        echo ("<th>NIC</th>");
		        echo ("<th>subject_name</th>");
                echo ("<th>initial_name</th>");
                echo ("<th>gender</th>");
                echo ("<th>contact_number</th>");
                echo "<th><a href='cc_more_applicant_data/cc_jad.php' target='blankpage'>more details</a></th>";
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
<!--Certificate Course in Agri-Business Management end-->

<!--Certificate Course in Plant Tissue Culture start-->
<?php
                $Result = mysqli_query($Connection,"SELECT * FROM applicant_details WHERE subject_type='CC_PTC'");
                
                echo ("<table border='1'>");

	            echo ("<tr>");
		        echo ("<th>NIC</th>");
		        echo ("<th>subject_name</th>");
                echo ("<th>initial_name</th>");
                echo ("<th>gender</th>");
                echo ("<th>contact_number</th>");
                echo "<th><a href='cc_more_applicant_data/cc_ptc.php' target='blankpage'>more details</a></th>";
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
<!--Certificate Course in Plant Tissue Culture end -->

<!--Certificate Course in Robotics and Ardiuno Programming start-->
<?php
                $Result = mysqli_query($Connection,"SELECT * FROM applicant_details WHERE subject_type='CC_RAP'");
                
                echo ("<table border='1'>");

	            echo ("<tr>");
		        echo ("<th>NIC</th>");
		        echo ("<th>subject_name</th>");
                echo ("<th>initial_name</th>");
                echo ("<th>gender</th>");
                echo ("<th>contact_number</th>");
                echo "<th><a href='cc_more_applicant_data/cc_rap.php' target='blankpage'>more details</a></th>";
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
<!--Certificate Course in Robotics and Ardiuno Programming end -->

<!--Certificate Course in Web Design start-->
<?php
                $Result = mysqli_query($Connection,"SELECT * FROM applicant_details WHERE subject_type='CC_WED'");
                
                echo ("<table border='1'>");

	            echo ("<tr>");
		        echo ("<th>NIC</th>");
		        echo ("<th>subject_name</th>");
                echo ("<th>initial_name</th>");
                echo ("<th>gender</th>");
                echo ("<th>contact_number</th>");
                echo "<th><a href='cc_more_applicant_data/cc_web.php' target='blankpage'>more details</a></th>";
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
<!--Certificate Course in Web Design end -->

<!--Certificate Course in Mobile Application Development start-->
<?php
                $Result = mysqli_query($Connection,"SELECT * FROM applicant_details WHERE subject_type='CC_MAD'");
                
                echo ("<table border='1'>");

	            echo ("<tr>");
		        echo ("<th>NIC</th>");
		        echo ("<th>subject_name</th>");
                echo ("<th>initial_name</th>");
                echo ("<th>gender</th>");
                echo ("<th>contact_number</th>");
                echo "<th><a href='cc_more_applicant_data/cc_mad.php' target='blankpage'>more details</a></th>";
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
<!--Certificate Course in Mobile Application Development end -->

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