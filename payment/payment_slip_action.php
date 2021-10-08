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

//nic_num = nic
//pro_id = program_id
//nic_path = file_path

$a0=$_POST["nic_num"];
$a1=$_POST["pro_id"];

//up3-lecture_note file
$file = $_FILES["nic_path"]["tmp_name"];
$name1 = $a0;
$name2 = $a1;
$path1 = "../uploaded_payment_slip/".$name1.$name2.".jpg";
$r = move_uploaded_file($file, $path1);

if($Connection){
	/*echo "Database connection successfully completed.";
	echo ("<br>");*/
	}

else{
	/*echo "Database connection Faild.";
	echo ("<br>");*/
}

$date = date('Y-m-d');
$Result = mysqli_query($Connection,"INSERT INTO payment_slips (dates,nic,program_id,file_path) values('$date','$a0','$a1','$path1')");

if($Result){
	echo "<script type='text/javascript'>
                
	swal({ title: 'SUCCESSFUL',text: 'Payment slip upload successful!',icon: 'success'}).then(okay => {
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
    window.location.href = '../check_nic.php';}
	});
    </script>";
	/*echo "Data added Faild.";
	echo ("<br>");*/
}

?>