<!DOCTYPE html>
<html>
<head>
    <title>INT</title>
    
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/index.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />

    <style type="text/css">
        body{background-color: rgb(192,192,192);

        }
    </style>
</head>

<body>

<?php

include_once("../includes/dbconnection.php");
?>

<?php
$Result = mysqli_query($Connection,"SELECT * FROM applicant_details WHERE subject_type='BA_INT'");

echo ("<table border='1'>");

	            echo ("<tr>");
		        echo ("<th>subject_type</th>");
                echo ("<th>full_name</th>");
		        echo ("<th>dob</th>");
		        echo ("<th>age_as_app_date</th>");
                echo ("<th>civil_status</th>");
		        echo ("<th>nationality</th>");
		        echo ("<th>nic_issues_date</th>");
                echo ("<th>nic_image</th>");
		        echo ("<th>email</th>");
		        echo ("<th>addresses</th>");
                echo ("<th>al_image</th>");
                echo ("<th>ol_image</th>");
		        echo ("<th>qulification</th>");
		        echo ("<th>present_emp_details</th>");
                echo ("<th>apply_status</th>");
                echo ("<th>reg_status</th>");
                echo ("<th>wish_to_inform</th>");
                echo ("<th>declaration</th>");
	            echo ("</tr>");

				while($row=mysqli_fetch_array($Result)){

                    echo "<tr>";
                echo "<td>".$row['subject_type']."</td>";
                echo "<td>".$row['full_name']."</td>";
                echo "<td>".$row['dob']."</td>";
                echo "<td>".$row['age_as_app_date']."</td>";
                echo "<td>".$row['civil_status']."</td>";
                echo "<td>".$row['nationality']."</td>";
                echo "<td>".$row['nic_issues_date']."</td>";
                echo "<td>".$row['nic_image']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['addresses']."</td>";
                echo "<td>".$row['al_image']."</td>";
                echo "<td>".$row['ol_image']."</td>";
                echo "<td>".$row['qulification']."</td>";
                echo "<td>".$row['present_emp_details']."</td>";
                echo "<td>".$row['apply_status']."</td>";
                echo "<td>".$row['reg_status']."</td>";
                echo "<td>".$row['wish_to_inform']."</td>";
                echo "<td>".$row['declaration']."</td>";      
                echo "</tr>";
				}
                echo "<br>";
                
                echo ("</table>");
                ?>

</body>
</html>
