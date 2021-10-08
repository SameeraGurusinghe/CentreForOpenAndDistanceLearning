<!DOCTYPE html>
<html>
<head>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<title></title>
</head>
<body>

</body>
</html>
<?php

//database connection
include_once("../includes/dbconnection.php");

$a1=$_POST["inf1"];
$a2=$_POST["inf2"];
$a3=$_POST["inf3"];
$a4=$_POST["inf4"];
$a5=$_POST["inf5"];
$a6=$_POST["inf6"];
$a7=$_POST["inf7"];
$a8=$_POST["inf8"];
$a9=$_POST["inf9"];
$a10=$_POST["inf10"];
$a11=$_POST["inf11"];
$a13=$_POST["inf13"];
$a14=$_POST["inf14"];
$a15=$_POST["inf15"];
$a18=$_POST["inf18"];
$a19=$_POST["inf19"];
$a20=$_POST["inf20"];
$a21=$_POST["inf21"];
$a22=$_POST["inf22"];
$a23=$_POST["inf23"];

//inf12-NIC IMAGE
$file = $_FILES["inf12"]["tmp_name"];
$name1 = $a10;
$path1 = "../upload_images/".$name1."_NIC.jpg";
$r = move_uploaded_file($file, $path1);

//inf16-A/L IMAGE
$file = $_FILES["inf16"]["tmp_name"];
$name2 = $a10;
$path2 = "../upload_images/".$name2."_AL.jpg";
$r = move_uploaded_file($file, $path2);

//inf16-O/L IMAGE
$file = $_FILES["inf17"]["tmp_name"];
$name3 = $a10;
$path3 = "../upload_images/".$name3."_OL.jpg";
$r = move_uploaded_file($file, $path3);


//$Connection = mysqli_connect("localhost","root","","StudentManagementSystem");
if($Connection){
	/*echo "Database connection successfully completed.";
	echo ("<br>");*/
	}

else{
	/*echo "Database connection Faild.";
	echo ("<br>");*/
}

$Result = mysqli_query($Connection,"INSERT INTO applicant_details (nic,subject_name,subject_type,initial_name,full_name,dob,age_as_app_date,gender,civil_status,nationality,nic_issues_date,nic_image,contact_number,email,addresses,al_image,ol_image,qulification,present_emp_details,apply_status,reg_status,wish_to_inform,declaration) values('$a10','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a11','$path1','$a13','$a14','$a15','$path2','$path3','$a18','$a19','$a20','$a21','$a22','$a23')");

if($Result){
	echo "<script type='text/javascript'>
                
	swal({ title: 'SUCCESSFUL',text: 'Your applicant details were submitted!',icon: 'success'}).then(okay => {
	if (okay) {
    window.location.href = '../index.php';}
	});
    </script>";
	/*echo "Data added successfully.";
	echo ("<br>");*/
	}

else{
	echo "<script type='text/javascript'>
                
	swal({ title: 'Opps!',text: 'An error occured!',icon: 'error'}).then(okay => {
	if (okay) {
    window.location.href = '../index.php';}
	});
    </script>";
	/*echo "Data added Faild.";
	echo ("<br>");*/
}

?>